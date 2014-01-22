<?php
/* @var $this InterpellationsController */
/* @var $model Interpellations */

$this->breadcrumbs=array(
	'Interpellations'=>array('index'),
	$model->interpellation_id,
);

$this->menu=array(
	array('label'=>'List Interpellations', 'url'=>array('index')),
	array('label'=>'Create Interpellations', 'url'=>array('create')),
	array('label'=>'Update Interpellations', 'url'=>array('update', 'id'=>$model->interpellation_id)),
	array('label'=>'Delete Interpellations', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->interpellation_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Interpellations', 'url'=>array('admin')),
);
?>

<h1>View Interpellations #<?php echo $model->interpellation_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'interpellation_id',
		'description',
		'category',
		'timestamp',
		'parliament_session_id',
		array(
				'label' => "Parliament session date",
				'type' => "raw",
				'value' => CHtml::link($model->parliamentSession->timestamp, $this->createAbsoluteUrl('parliamentSessions/view', array('id'=>$model->parliament_session_id)))
			),
		'mp_id',
		array(
				'label' => "MP name",
				'type' => "raw",
				'value' => CHtml::link($model->mp->person->name, $this->createAbsoluteUrl('mps/view', array('id'=>$model->mp_id)))
			),
	),
)); ?>
