<?php
/* @var $this GovernmentsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	Yii::t('app','Governments'),
);

$this->menu=array(
	array('label'=>Yii::t('app','Create Governments'), 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage Governments'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Governments') ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
