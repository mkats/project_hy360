<?php
/* @var $this ParliamentCyclesController */
/* @var $model ParliamentCycles */

$this->breadcrumbs=array(
	'Parliament Cycles'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List ParliamentCycles', 'url'=>array('index')),
	array('label'=>'Create ParliamentCycles', 'url'=>array('create')),
	array('label'=>'Update ParliamentCycles', 'url'=>array('update', 'id'=>$model->parliament_cycle_id)),
	array('label'=>'Delete ParliamentCycles', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->parliament_cycle_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ParliamentCycles', 'url'=>array('admin')),
);
?>

<h1>View ParliamentCycles #<?php echo $model->parliament_cycle_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'parliament_cycle_id',
		'title',
	),
)); ?>
