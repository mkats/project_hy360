<?php
/* @var $this PartiesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	Yii::t('app','Parties'),
);

$this->menu=array(
	array('label'=>Yii::t('app','Create Parties'), 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage Parties'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Parties') ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
