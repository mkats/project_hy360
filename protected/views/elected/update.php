<?php
/* @var $this ElectedController */
/* @var $model Elected */

$this->breadcrumbs=array(
	'Electeds'=>array('index'),
	$model->elected_id=>array('view','id'=>$model->elected_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Elected', 'url'=>array('index')),
	array('label'=>'Create Elected', 'url'=>array('create')),
	array('label'=>'View Elected', 'url'=>array('view', 'id'=>$model->elected_id)),
	array('label'=>'Manage Elected', 'url'=>array('admin')),
);
?>

<h1>Update Elected <?php echo $model->elected_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>