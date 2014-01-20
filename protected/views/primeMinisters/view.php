<?php
/* @var $this PrimeMinistersController */
/* @var $model PrimeMinisters */

$this->breadcrumbs=array(
	'Prime Ministers'=>array('index'),
	$model->prime_minister_id,
);

$this->menu=array(
	array('label'=>'List PrimeMinisters', 'url'=>array('index')),
	array('label'=>'Create PrimeMinisters', 'url'=>array('create')),
	array('label'=>'Update PrimeMinisters', 'url'=>array('update', 'id'=>$model->prime_minister_id)),
	array('label'=>'Delete PrimeMinisters', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->prime_minister_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PrimeMinisters', 'url'=>array('admin')),
);
?>

<h1>View PrimeMinisters #<?php echo $model->prime_minister_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'prime_minister_id',
		'person_id',
	),
)); ?>
