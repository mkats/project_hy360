<?php
/* @var $this LeadsController */
/* @var $model Leads */

$this->breadcrumbs=array(
	'Leads'=>array('index'),
	$model->leads_id,
);

$this->menu=array(
	array('label'=>'List Leads', 'url'=>array('index')),
	array('label'=>'Create Leads', 'url'=>array('create')),
	array('label'=>'Update Leads', 'url'=>array('update', 'id'=>$model->leads_id)),
	array('label'=>'Delete Leads', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->leads_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Leads', 'url'=>array('admin')),
);
?>

<h1>View Leads #<?php echo $model->leads_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'leads_id',
		'party_leader_id',
		array(
				'label' => "Person name",
				'type' => "raw",
				'value' => CHtml::link($model->partyLeader->person->name, $this->createAbsoluteUrl('partyLeaders/view', array('id'=>$model->party_leader_id)))
			),
		'party_id',
		array(
				'label' => "Party name",
				'type' => "raw",
				'value' => CHtml::link($model->party->name, $this->createAbsoluteUrl('parties/view', array('id'=>$model->party_id)))
			),
		'start_timestamp',
		'end_timestamp',
	),
)); ?>
