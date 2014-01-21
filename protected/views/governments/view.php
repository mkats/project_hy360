<?php
/* @var $this GovernmentsController */
/* @var $model Governments */

$this->breadcrumbs=array(
	'Governments'=>array('index'),
	$model->government_id,
);

$this->menu=array(
	array('label'=>'List Governments', 'url'=>array('index')),
	array('label'=>'Create Governments', 'url'=>array('create')),
	array('label'=>'Update Governments', 'url'=>array('update', 'id'=>$model->government_id)),
	array('label'=>'Delete Governments', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->government_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Governments', 'url'=>array('admin')),
);
?>

<h1>View Governments #<?php echo $model->government_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'government_id',
		'parliament_cycle_id',
		'prime_minister_id',
	),
)); ?>
