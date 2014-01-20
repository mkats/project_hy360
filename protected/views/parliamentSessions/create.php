<?php
/* @var $this ParliamentSessionsController */
/* @var $model ParliamentSessions */

$this->breadcrumbs=array(
	'Parliament Sessions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ParliamentSessions', 'url'=>array('index')),
	array('label'=>'Manage ParliamentSessions', 'url'=>array('admin')),
);
?>

<h1>Create ParliamentSessions</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>