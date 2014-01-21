<?php
/* @var $this ParliamentSessionsController */
/* @var $model ParliamentSessions */

$this->breadcrumbs=array(
	'Parliament Sessions'=>array('index'),
	$model->parliament_session_id,
);

$this->menu=array(
	array('label'=>'List ParliamentSessions', 'url'=>array('index')),
	array('label'=>'Create ParliamentSessions', 'url'=>array('create')),
	array('label'=>'Update ParliamentSessions', 'url'=>array('update', 'id'=>$model->parliament_session_id)),
	array('label'=>'Delete ParliamentSessions', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->parliament_session_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ParliamentSessions', 'url'=>array('admin')),
);
?>

<h1>View ParliamentSessions #<?php echo $model->parliament_session_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'parliament_session_id',
		'timestamp',
		'parliament_cycle_id',
		array(
				'label' => "Parliament cycle title",
				'type' => "raw",
				'value' => CHtml::link($model->parliamentCycle->title, $this->createAbsoluteUrl('parliamentCycles/view', array('id'=>$model->parliament_cycle_id)))
			),
	),
)); ?>
