<?php
/* @var $this PersonsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	Yii::t('app','Persons'),
);

$this->menu=array(
	array('label'=>Yii::t('app','Create Persons'), 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage Persons'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Persons') ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
