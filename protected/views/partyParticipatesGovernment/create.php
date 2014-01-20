<?php
/* @var $this PartyParticipatesGovernmentController */
/* @var $model PartyParticipatesGovernment */

$this->breadcrumbs=array(
	'Party Participates Governments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PartyParticipatesGovernment', 'url'=>array('index')),
	array('label'=>'Manage PartyParticipatesGovernment', 'url'=>array('admin')),
);
?>

<h1>Create PartyParticipatesGovernment</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>