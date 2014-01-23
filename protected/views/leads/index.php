<?php
/* @var $this LeadsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	Yii::t('app','Leads'),
);

$this->menu=array(
	array('label'=>Yii::t('app','Create Leads'), 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage Leads'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Leads') ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
