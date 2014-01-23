<?php
/* @var $this BelongsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	Yii::t('app','Belongs'),
);

$this->menu=array(
	array('label'=>Yii::t('app','Create Belongs'), 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage Belongs'), 'url'=>array('admin')),
);
?>

<h1><?php Yii::t('app','Belongs') ?> </h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
