<?php
/* @var $this BelongsController */
/* @var $model Belongs */

$this->breadcrumbs=array(
	'Belongs'=>array('index'),
	$model->belongs_id,
);

$this->menu=array(
	array('label'=>'List Belongs', 'url'=>array('index')),
	array('label'=>'Create Belongs', 'url'=>array('create')),
	array('label'=>'Update Belongs', 'url'=>array('update', 'id'=>$model->belongs_id)),
	array('label'=>'Delete Belongs', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->belongs_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Belongs', 'url'=>array('admin')),
);
?>

<h1>View Belongs #<?php echo $model->belongs_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'belongs_id',
		'mp_id',
		array(
				'label' => "Person name",
				'type' => "raw",
				'value' => CHtml::link($model->mp->person->name, $this->createAbsoluteUrl('mps/view', array('id'=>$model->mp_id)))
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
