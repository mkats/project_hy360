<?php
/* @var $this ParticipateController */
/* @var $model Participate */

$this->breadcrumbs=array(
	'Participates'=>array('index'),
	$model->participate_id=>array('view','id'=>$model->participate_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Participate', 'url'=>array('index')),
	array('label'=>'Create Participate', 'url'=>array('create')),
	array('label'=>'View Participate', 'url'=>array('view', 'id'=>$model->participate_id)),
	array('label'=>'Manage Participate', 'url'=>array('admin')),
);
?>

<h1>Update Participate <?php echo $model->participate_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>