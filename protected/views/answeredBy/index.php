<?php
/* @var $this AnsweredByController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	Yii::t('app','Answered Bies'),
);

$this->menu=array(
	array('label'=>Yii::t('app','Create AnsweredBy'), 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage AnsweredBy'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Answered Bies') ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
