<?php
/* @var $this MinisterParticipatesGovernmentController */
/* @var $model MinisterParticipatesGovernment */

$this->breadcrumbs=array(
	'Minister Participates Governments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MinisterParticipatesGovernment', 'url'=>array('index')),
	array('label'=>'Manage MinisterParticipatesGovernment', 'url'=>array('admin')),
);
?>

<h1>Create MinisterParticipatesGovernment</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>