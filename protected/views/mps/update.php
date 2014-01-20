<?php
/* @var $this MpsController */
/* @var $model Mps */

$this->breadcrumbs=array(
	'Mps'=>array('index'),
	$model->mp_id=>array('view','id'=>$model->mp_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Mps', 'url'=>array('index')),
	array('label'=>'Create Mps', 'url'=>array('create')),
	array('label'=>'View Mps', 'url'=>array('view', 'id'=>$model->mp_id)),
	array('label'=>'Manage Mps', 'url'=>array('admin')),
);
?>

<h1>Update Mps <?php echo $model->mp_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>