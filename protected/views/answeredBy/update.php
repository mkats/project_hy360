<?php
/* @var $this AnsweredByController */
/* @var $model AnsweredBy */

$this->breadcrumbs=array(
	Yii::t('app','Answered Bies')=>array('index'),
	$model->answered_by_id=>array('view','id'=>$model->answered_by_id),
	Yii::t('app','Update'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List AnsweredBy'), 'url'=>array('index')),
	array('label'=>Yii::t('app','Create AnsweredBy'), 'url'=>array('create')),
	array('label'=>Yii::t('app','View AnsweredBy'), 'url'=>array('view', 'id'=>$model->answered_by_id)),
	array('label'=>Yii::t('app','Manage AnsweredBy'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Update AnsweredBy') ?> <?php echo $model->answered_by_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>