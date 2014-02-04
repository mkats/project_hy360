<?php
/* @var $this AnsweredByController */
/* @var $model AnsweredBy */

$this->breadcrumbs=array(
	Yii::t('app','Answered Bies')=>array('index'),
	$model->answered_by_id,
);

$this->menu=array(
	array('label'=>Yii::t('app','List AnsweredBy'), 'url'=>array('index')),
	array('label'=>Yii::t('app','Create AnsweredBy'), 'url'=>array('create')),
	array('label'=>Yii::t('app','Update AnsweredBy'), 'url'=>array('update', 'id'=>$model->answered_by_id)),
	array('label'=>Yii::t('app','Delete AnsweredBy'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->answered_by_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app','Manage AnsweredBy'), 'url'=>array('admin')),
);
?>

<h1>View AnsweredBy #<?php echo $model->answered_by_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'answered_by_id',
		'interpellation_id',
		array(
				'label' => "Description",
				'type' => "raw",
				'value' => CHtml::link($model->interpellation->description, $this->createAbsoluteUrl('interpellations/view', array('id'=>$model->interpellation_id)))
			),
		'minister_id',
		array(
				'label' => "Minister name",
				'type' => "raw",
				'value' => CHtml::link($model->minister->person->name, $this->createAbsoluteUrl('ministers/view', array('id'=>$model->minister_id)))
			),
		'timestamp',
		'answer',
	),
)); ?>
