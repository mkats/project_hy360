<?php
/* @var $this GovernmentsController */
/* @var $model Governments */

$this->breadcrumbs=array(
	'Governments'=>array('index'),
	$model->government_id=>array('view','id'=>$model->government_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Governments', 'url'=>array('index')),
	array('label'=>'Create Governments', 'url'=>array('create')),
	array('label'=>'View Governments', 'url'=>array('view', 'id'=>$model->government_id)),
	array('label'=>'Manage Governments', 'url'=>array('admin')),
);
?>

<h1>Update Governments <?php echo $model->government_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>