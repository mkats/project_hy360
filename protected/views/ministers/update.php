<?php
/* @var $this MinistersController */
/* @var $model Ministers */

$this->breadcrumbs=array(
	'Ministers'=>array('index'),
	$model->minister_id=>array('view','id'=>$model->minister_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ministers', 'url'=>array('index')),
	array('label'=>'Create Ministers', 'url'=>array('create')),
	array('label'=>'View Ministers', 'url'=>array('view', 'id'=>$model->minister_id)),
	array('label'=>'Manage Ministers', 'url'=>array('admin')),
);
?>

<h1>Update Ministers <?php echo $model->minister_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>