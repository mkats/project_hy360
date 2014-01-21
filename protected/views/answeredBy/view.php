<?php
/* @var $this AnsweredByController */
/* @var $model AnsweredBy */

$this->breadcrumbs=array(
	'Answered Bies'=>array('index'),
	$model->answered_by_id,
);

$this->menu=array(
	array('label'=>'List AnsweredBy', 'url'=>array('index')),
	array('label'=>'Create AnsweredBy', 'url'=>array('create')),
	array('label'=>'Update AnsweredBy', 'url'=>array('update', 'id'=>$model->answered_by_id)),
	array('label'=>'Delete AnsweredBy', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->answered_by_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AnsweredBy', 'url'=>array('admin')),
);
?>

<h1>View AnsweredBy #<?php echo $model->answered_by_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'answered_by_id',
		'interpellation_id',
		'minister_id',
		'timestamp',
	),
)); ?>
