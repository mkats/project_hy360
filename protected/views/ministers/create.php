<?php
/* @var $this MinistersController */
/* @var $model Ministers */

$this->breadcrumbs=array(
	'Ministers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ministers', 'url'=>array('index')),
	array('label'=>'Manage Ministers', 'url'=>array('admin')),
);
?>

<h1>Create Ministers</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>