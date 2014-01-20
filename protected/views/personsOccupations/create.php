<?php
/* @var $this PersonsOccupationsController */
/* @var $model PersonsOccupations */

$this->breadcrumbs=array(
	'Persons Occupations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PersonsOccupations', 'url'=>array('index')),
	array('label'=>'Manage PersonsOccupations', 'url'=>array('admin')),
);
?>

<h1>Create PersonsOccupations</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>