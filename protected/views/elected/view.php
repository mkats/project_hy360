<?php
/* @var $this ElectedController */
/* @var $model Elected */

$this->breadcrumbs=array(
	'Electeds'=>array('index'),
	$model->elected_id,
);

$this->menu=array(
	array('label'=>'List Elected', 'url'=>array('index')),
	array('label'=>'Create Elected', 'url'=>array('create')),
	array('label'=>'Update Elected', 'url'=>array('update', 'id'=>$model->elected_id)),
	array('label'=>'Delete Elected', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->elected_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Elected', 'url'=>array('admin')),
);
?>

<h1>View Elected #<?php echo $model->elected_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'elected_id',
		'mp_id',
		'parliament_cycle_id',
		'constituency',
		'independence_timestamp',
	),
)); ?>
