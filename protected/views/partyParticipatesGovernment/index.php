<?php
/* @var $this PartyParticipatesGovernmentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Party Participates Governments',
);

$this->menu=array(
	array('label'=>'Create PartyParticipatesGovernment', 'url'=>array('create')),
	array('label'=>'Manage PartyParticipatesGovernment', 'url'=>array('admin')),
);
?>

<h1>Party Participates Governments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
