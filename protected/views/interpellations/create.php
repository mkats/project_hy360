<?php
/* @var $this InterpellationsController */
/* @var $model Interpellations */

$this->breadcrumbs=array(
	'Interpellations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Interpellations', 'url'=>array('index')),
	array('label'=>'Manage Interpellations', 'url'=>array('admin')),
);
?>

<h1>Create Interpellations</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>