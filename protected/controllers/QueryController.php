<?php

/**
 * include class extensions/SDataProvider, which is used to as an dataprovider from Array.
 * @see http://www.yiiframework.com/forum/index.php/topic/6844-arrays-as-dataprovider/
 */
$strPath= dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'extensions'.DIRECTORY_SEPARATOR.'SDataProvider.php';
include_once $strPath;

class QueryController extends Controller
{
	public function actionIndex()
	{
		Query::initialize();
		$queries = Query::findAll();
		// TODO: Maybe select only some columns?
		$dataArray = $queries;
		$dataProvider = new SDataProvider("grid",$dataArray);
		//$this->render('index');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
		
	}
	
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id) {
		Query::initialize();
		
		$render2ndParam= array(
			'model'=>Query::findById($id), //$this->loadModel($id)
			//'post'=>$_POST,
			);
		
		// If the form was submitted...
		if(isset($_POST['yt0'])) {
			
			// Collect the needed data (i.e., SQL query & param values).
			$query= Query::findById($id);
			$paramNamesValues= array();
			if (isset($_POST['Query']['params']))
				$paramNamesValues= $_POST['Query']['params'];
			
			// Connect to the database
			$cdbConnection = Yii::app()->db;
			$command = $cdbConnection->createCommand($query->sql);
			if (isset($paramNamesValues)) {
				foreach ($paramNamesValues as $param_name => $param_value) {
					$command->bindParam($param_name, $param_value, PDO::PARAM_STR);
				}
			}
			$count= $command->queryScalar();
			
			// Create data provider instance, needed by the CGridView obj. (HTML table).
			$dataProvider=new CSqlDataProvider($query->sql, array(
				'totalItemCount'=>$count,
				'pagination' => false
			));
			if (isset($paramNamesValues)) {
				$dataProvider->params = $paramNamesValues;
			}
			
			// Let's try the SDataProvider instead of the CSqlDataProvider
			$data= $dataProvider->getData();
			$dataProvider = new SDataProvider("grid",$data);
			// It works! :-)
			
			$render2ndParam['paramNamesValues']= $paramNamesValues;
			$render2ndParam['dataProvider']= $dataProvider;
			/*
			 * A jQuery script will focus the renedred page on the DOM element
			 * with the specific id attribute (e.g., on the result of the query
			 * evaluation).
			 */
			$render2ndParam['hash']= 'query-result';
		}
		$this->render('view',$render2ndParam);
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}