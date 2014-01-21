<?php
/* @var $this PartyLeadersController */
/* @var $model PartyLeaders */

$this->breadcrumbs=array(
	'Party Leaders'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PartyLeaders', 'url'=>array('index')),
	array('label'=>'Manage PartyLeaders', 'url'=>array('admin')),
);
?>

<h1>Create PartyLeaders</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>