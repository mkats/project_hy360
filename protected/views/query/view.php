<?php
/* @var $this QueryController */
/* @var $model Query */
/* @var $paramNamesValues array*/
/* @var $dataProvider SDataProvider*/
$this->breadcrumbs=array(
	Yii::t('app','Queries')=>array('index'),
	$model->id,
);

//print_r($post);
?>

<h1>View Query <?php echo $model->id.": ".$model->title; ?></h1>

<p><?php echo $model->brief ?></p>

<?php
// Create a form with an input field for each param
$form=$this->beginWidget('CActiveForm', array(
	'id'=>'query-param-form',
	'enableAjaxValidation'=>false,
));
echo $form->errorSummary($model);

if (isset($model->params)) {
	echo "<p>Parameters:</p>";
	echo '<div class="form">';
	foreach ($model->params as $param_name => $param_desc) {
		$param_value= "''";
		//echo('<li><strong>'.$param_name.' = '.$param_value.'</strong>: '.$param_desc.'</li>');
		
		echo '<div class="row">';
			echo $form->labelEx($model,'params['.$param_name.']');
			echo $param_desc.'<br />';
			echo $form->textField($model,'params['.$param_name.']', array('prompt'=>"", 'value'=>"",));
			echo $form->error($model,'params['.$param_name.']');
		echo '</div>';
	}
}

echo '<div class="row buttons">';
	echo CHtml::submitButton('Evaluate query');
echo '</div>';

$this->endWidget(); // End of form
?>

<?php
$this->beginWidget('ext.prettify.JPrettify', array(
		'lang'=>"SQL",
		'themeName' => 'prettify',
		'htmlOptions'=>array(
			'style'=>'max-height: 340px; overflow-y: scroll; font-size:9pt; background-color:white; padding:5px;') 
		));
	echo $model->sql;
	$this->endWidget();
?>

<?php
//Show defined parameters
if(isset($paramNamesValues)) {
	echo '<p>Result with params:<ol>';
	foreach ($paramNamesValues as $paramName => $paramValue) {
		echo '<li>'.$paramName.' = '.$paramValue.'</li>';
	}
	echo '</ol></p>';
}

//Show the query result
if (isset($dataProvider)) {
	
	echo '<input value="'.$hash.'" id="hash" type="hidden" />';
	echo '<script type="text/javascript">';
	echo '	$(document).ready(function(){';
	echo '		console.log($("#hash").val());';
	echo '		location.hash = "#"+$("#hash").val();';
	echo '	});';
	echo '</script>';
	
	
	$data= $dataProvider->getData();
	if (count($data)>0) {
		// get column names
	//	$data_keys = array_keys($data[0]);
		//print_r($data_keys);
		// Create HTML table to present the retrieved data.
		echo '<div id="query-result" style="height:300px; overflow:scroll; /*border:#888 1px solid; background:white;*/ margin-bottom:10px;">';
		$this->widget('zii.widgets.grid.CGridView', array(
			'dataProvider'=>$dataProvider,
	//		'columns'=>$data_keys,
		));
		echo '</div>';
	} else {
		echo '<span id="query-result" style="color:red;"> Empty query result.</span>';
	}
}
?>