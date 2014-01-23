<?php
/* @var $this AnsweredByController */
/* @var $model AnsweredBy */

$this->breadcrumbs=array(
	Yii::t('app','Answered Bies')=>array('index'),
	Yii::t('app','Create'),
);

$this->menu=array(
	array('label'=>Yii::t('app','List AnsweredBy'), 'url'=>array('index')),
	array('label'=>Yii::t('app','Manage AnsweredBy'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Create AnsweredBy') ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>