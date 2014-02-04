<?php
/**
 * This file is not used. No link points here. Its logic has been moved in the
 * following files:
 *   1. models/Query.php
 *   2. controllers/QueryController.php
 *   3. views/query/*.php
 * 
 * This file is still included in the project only in case some code from here
 * needs to be copy-pasted to one of the previous mentioned files.
 */

/* @var $this Site */
$this->pageTitle=Yii::app()->name;
?>

<?php

$baseQueryPath= dirname(__FILE__).DIRECTORY_SEPARATOR.
		'..'.DIRECTORY_SEPARATOR.
		'..'.DIRECTORY_SEPARATOR.
		'..'.DIRECTORY_SEPARATOR.
		"data".DIRECTORY_SEPARATOR."queries".DIRECTORY_SEPARATOR;

$queries = array();
for($i=1; $i<=10; $i++) {
	array_push($queries, array(
		'id'=>$i,
		'sql'=> file_get_contents($baseQueryPath.'q'.$i.'.sql'),
		));
}
// Define parameters
$queries[0]['params']=array(":party_name"=>"ΝΔ");
$queries[2]['params']=array(":parliament_cycle_title" => "ΙE' Βουλευτική Περίοδος");

?>

<h1>Queries</h1>
<?php

//echo($_GET['view']);

$queryNum=-1;
foreach($queries as $query) {
	$queryNum++;
	if (!($queryNum==0 || $queryNum==2))
		continue;
	echo '<div class="query">';
	
	$sql = $query['sql'];
	$title= explode('@title', $query['sql']);
	$title = isset($title[1]) ? $title[1] : "Query";
	$title= explode("\n *", $title);
	$title = isset($title[0]) ? $title[0] : "Query";
	$title= str_replace(" * ", " ", $title);
	echo ('<h2>'.$query['id'].': '.$title.'</h2>');
	
	
	$brief= explode('@brief', $query['sql']);
	$brief = isset($brief[1]) ? $brief[1] : "[Description]";
	$brief= explode("\n *\n", $brief);
	$brief= str_replace(" * ", " ", $brief);
	$brief = isset($brief[0]) ? $brief[0] : "[Description]";
	echo ('<p>'.$brief.'</p>');
	
	
	
	if (isset($query['params'])) {
		echo('<p>Parameters: <ol>');
		$params_doc= explode('@param', $query['sql']);
		
		if (isset($query['params'])) {
			$i=0;
			foreach ($query['params'] as $param_name => $param_value) {
				$param_doc = $params_doc[$i+1];
				$param_doc = explode(' *', $param_doc);
				$param_doc = isset($param_doc[0]) ? $param_doc[0] : "[param]";
				$param_doc = explode(': ', $param_doc);
				$param_doc_desc="";
				if (count($param_doc)>1)
					$param_doc_desc= $param_doc[1];
				$param_doc= $param_doc[0];
				echo('<li><strong>'.$param_doc.' = '.$param_value.'</strong>: '.$param_doc_desc.'</li>');
			}
			echo '</ol>';
		}
	}
	
	
	$this->beginWidget('ext.prettify.JPrettify', array(
		'lang'=>"SQL",
		'themeName' => 'prettify',
		'htmlOptions'=>array(
			'style'=>'max-height: 340px; overflow-y: scroll; font-size:9pt; background-color:white; padding:5px;') 
		));
	echo $query['sql'];
	$this->endWidget();
	
	echo('<strong>'.'Result:'.'</strong>');
	
	// Connect to the database
	$cdbConnection = Yii::app()->db;
	$command = $cdbConnection->createCommand($query['sql']);
	if (isset($query['params'])) {
		foreach ($query['params'] as $param_name => $param_value) {
			$command->bindParam($param_name, $param_value, PDO::PARAM_STR);
		}
	}
	$count= $command->queryScalar();
	//$count=Yii::app()->db->createCommand($query['sql'])->bindParam(":party_name", $preparedParam, PDO::PARAM_STR)->queryScalar();
	$sql=$query['sql'];
	
	// Create data provider instance, needed by the CGridView obj. (HTML table).
	$dataProvider=new CSqlDataProvider($sql, array(
		'totalItemCount'=>$count,
		//'params' => $query['params'] /*array(":party_name" => $preparedParam)*/,
		'pagination' => false
	));
	if (isset($query['params'])) {
		$dataProvider->params = $query['params'];
	}
	$data= $dataProvider->getData();
	if (count($data)>0) {
		// get column names
		$data_keys = array_keys($data[0]);
		//print_r($data_keys);
		// Create HTML table to present the retrieved data.
		echo '<div style="height:300px; overflow:scroll; /*border:#888 1px solid; background:white;*/ margin-bottom:10px;">';
		$this->widget('zii.widgets.grid.CGridView', array(
			'dataProvider'=>$dataProvider,
			'columns'=>$data_keys,
		));
		echo '</div>';
	} else {
		echo '<span style="color:red;"> Empty query result.</span>';
	}
	
	echo '</div>';
}

?>
