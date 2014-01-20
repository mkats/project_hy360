<?php
/* @var $this GovernmentsController */
/* @var $model Governments */

$this->breadcrumbs=array(
	'Governments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Governments', 'url'=>array('index')),
	array('label'=>'Manage Governments', 'url'=>array('admin')),
);
?>

<h1>Create Governments</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>