<?php
/* @var $this InterpellationsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	Yii::t('app','Interpellations'),
);

$this->menu=array(
	array('label'=>Yii::t('app','Create Interpellations'), 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage Interpellations'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Interpellations') ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
