<?php
/* @var $this MpsController */
/* @var $model Mps */

$this->breadcrumbs=array(
	'Mps'=>array('index'),
	$model->mp_id,
);

$this->menu=array(
	array('label'=>'List Mps', 'url'=>array('index')),
	array('label'=>'Create Mps', 'url'=>array('create')),
	array('label'=>'Update Mps', 'url'=>array('update', 'id'=>$model->mp_id)),
	array('label'=>'Delete Mps', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->mp_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Mps', 'url'=>array('admin')),
);
?>

<h1>View Mps #<?php echo $model->mp_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'mp_id',
		'person_id',
		array(
				'label' => "Person name",
				'type' => "raw",
				'value' => CHtml::link($model->person->name, $this->createAbsoluteUrl('persons/view', array('id'=>$model->person_id)))
			),
	),
)); ?>
