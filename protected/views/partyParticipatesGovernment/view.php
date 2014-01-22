<?php
/* @var $this PartyParticipatesGovernmentController */
/* @var $model PartyParticipatesGovernment */

$this->breadcrumbs=array(
	'Party Participates Governments'=>array('index'),
	$model->party_participates_government_id,
);

$this->menu=array(
	array('label'=>'List PartyParticipatesGovernment', 'url'=>array('index')),
	array('label'=>'Create PartyParticipatesGovernment', 'url'=>array('create')),
	array('label'=>'Update PartyParticipatesGovernment', 'url'=>array('update', 'id'=>$model->party_participates_government_id)),
	array('label'=>'Delete PartyParticipatesGovernment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->party_participates_government_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PartyParticipatesGovernment', 'url'=>array('admin')),
);
?>

<h1>View PartyParticipatesGovernment #<?php echo $model->party_participates_government_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'party_participates_government_id',
		'party_id',
		array(
				'label' => "Party name",
				'type' => "raw",
				'value' => CHtml::link($model->party->name, $this->createAbsoluteUrl('parties/view', array('id'=>$model->party_id)))
			),
		'government_id',
		array(
				'label' => "Government",
				'type' => "raw",
				'value' => CHtml::link($model->government_id, $this->createAbsoluteUrl('governments/view', array('id'=>$model->government_id)))
			),
	),
)); ?>
