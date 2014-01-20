<?php
/* @var $this MinistersController */
/* @var $model Ministers */

$this->breadcrumbs=array(
	'Ministers'=>array('index'),
	$model->minister_id,
);

$this->menu=array(
	array('label'=>'List Ministers', 'url'=>array('index')),
	array('label'=>'Create Ministers', 'url'=>array('create')),
	array('label'=>'Update Ministers', 'url'=>array('update', 'id'=>$model->minister_id)),
	array('label'=>'Delete Ministers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->minister_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ministers', 'url'=>array('admin')),
);
?>

<h1>View Ministers #<?php echo $model->minister_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'minister_id',
		'person_id',
	),
)); ?>
