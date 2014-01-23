<?php
/* @var $this MpsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	Yii::t('app','Mps'),
);

$this->menu=array(
	array('label'=>Yii::t('app','Create Mps'), 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage Mps'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Mps') ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
