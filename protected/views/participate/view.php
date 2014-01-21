<?php
/* @var $this ParticipateController */
/* @var $model Participate */

$this->breadcrumbs=array(
	'Participates'=>array('index'),
	$model->participate_id,
);

$this->menu=array(
	array('label'=>'List Participate', 'url'=>array('index')),
	array('label'=>'Create Participate', 'url'=>array('create')),
	array('label'=>'Update Participate', 'url'=>array('update', 'id'=>$model->participate_id)),
	array('label'=>'Delete Participate', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->participate_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Participate', 'url'=>array('admin')),
);
?>

<h1>View Participate #<?php echo $model->participate_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'participate_id',
		'party_id',
		array(
					'label' => "Party name",
					'type' => "raw",
					'value' => CHtml::link($model->party->name, $this->createAbsoluteUrl('parties/view', array('id'=>$model->party_id)))
			),
		'parliament_cycle_id',
		array(
					'label' => "Parliament cycle title",
					'type' => "raw",
					'value' => CHtml::link($model->parliamentCycle->title, $this->createAbsoluteUrl('parliamentCycles/view', array('id'=>$model->parliament_cycle_id)))
			),
	),
)); ?>
