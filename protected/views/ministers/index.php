<?php
/* @var $this MinistersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	Yii::t('app','Ministers'),
);

$this->menu=array(
	array('label'=>Yii::t('app','Create Ministers'), 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage Ministers'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Ministers') ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
