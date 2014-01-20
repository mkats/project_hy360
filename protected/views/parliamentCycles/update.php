<?php
/* @var $this ParliamentCyclesController */
/* @var $model ParliamentCycles */

$this->breadcrumbs=array(
	'Parliament Cycles'=>array('index'),
	$model->title=>array('view','id'=>$model->parliament_cycle_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ParliamentCycles', 'url'=>array('index')),
	array('label'=>'Create ParliamentCycles', 'url'=>array('create')),
	array('label'=>'View ParliamentCycles', 'url'=>array('view', 'id'=>$model->parliament_cycle_id)),
	array('label'=>'Manage ParliamentCycles', 'url'=>array('admin')),
);
?>

<h1>Update ParliamentCycles <?php echo $model->parliament_cycle_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>