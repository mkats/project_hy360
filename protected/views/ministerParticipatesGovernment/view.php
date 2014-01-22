<?php
/* @var $this MinisterParticipatesGovernmentController */
/* @var $model MinisterParticipatesGovernment */

$this->breadcrumbs=array(
	'Minister Participates Governments'=>array('index'),
	$model->minister_participates_government_id,
);

$this->menu=array(
	array('label'=>'List MinisterParticipatesGovernment', 'url'=>array('index')),
	array('label'=>'Create MinisterParticipatesGovernment', 'url'=>array('create')),
	array('label'=>'Update MinisterParticipatesGovernment', 'url'=>array('update', 'id'=>$model->minister_participates_government_id)),
	array('label'=>'Delete MinisterParticipatesGovernment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->minister_participates_government_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MinisterParticipatesGovernment', 'url'=>array('admin')),
);
?>

<h1>View MinisterParticipatesGovernment #<?php echo $model->minister_participates_government_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'minister_participates_government_id',
		'minister_id',
		array(
				'label' => "Minister name",
				'type' => "raw",
				'value' => CHtml::link($model->minister->person->name, $this->createAbsoluteUrl('ministers/view', array('id'=>$model->minister_id)))
			),
		'government_id',
		array(
				'label' => "Government",
				'type' => "raw",
				'value' => CHtml::link($model->government_id, $this->createAbsoluteUrl('governments/view', array('id'=>$model->government_id)))
			),
		'start_timestamp',
		'end_timestamp',
	),
)); ?>
