<?php
/* @var $this AnsweredByController */
/* @var $model AnsweredBy */

$this->breadcrumbs=array(
	'Answered Bies'=>array('index'),
	$model->answered_by_id=>array('view','id'=>$model->answered_by_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AnsweredBy', 'url'=>array('index')),
	array('label'=>'Create AnsweredBy', 'url'=>array('create')),
	array('label'=>'View AnsweredBy', 'url'=>array('view', 'id'=>$model->answered_by_id)),
	array('label'=>'Manage AnsweredBy', 'url'=>array('admin')),
);
?>

<h1>Update AnsweredBy <?php echo $model->answered_by_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>