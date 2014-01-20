<?php
/* @var $this ParticipateController */
/* @var $model Participate */

$this->breadcrumbs=array(
	'Participates'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Participate', 'url'=>array('index')),
	array('label'=>'Manage Participate', 'url'=>array('admin')),
);
?>

<h1>Create Participate</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>