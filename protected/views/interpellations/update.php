<?php
/* @var $this InterpellationsController */
/* @var $model Interpellations */

$this->breadcrumbs=array(
	'Interpellations'=>array('index'),
	$model->interpellation_id=>array('view','id'=>$model->interpellation_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Interpellations', 'url'=>array('index')),
	array('label'=>'Create Interpellations', 'url'=>array('create')),
	array('label'=>'View Interpellations', 'url'=>array('view', 'id'=>$model->interpellation_id)),
	array('label'=>'Manage Interpellations', 'url'=>array('admin')),
);
?>

<h1>Update Interpellations <?php echo $model->interpellation_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>