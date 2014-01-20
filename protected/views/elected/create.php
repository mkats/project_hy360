<?php
/* @var $this ElectedController */
/* @var $model Elected */

$this->breadcrumbs=array(
	'Electeds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Elected', 'url'=>array('index')),
	array('label'=>'Manage Elected', 'url'=>array('admin')),
);
?>

<h1>Create Elected</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>