<?php
/* @var $this LeadsController */
/* @var $model Leads */

$this->breadcrumbs=array(
	'Leads'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Leads', 'url'=>array('index')),
	array('label'=>'Manage Leads', 'url'=>array('admin')),
);
?>

<h1>Create Leads</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>