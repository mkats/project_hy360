<?php
/* @var $this ParticipateController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	Yii::t('app','Participates'),
);

$this->menu=array(
	array('label'=>Yii::t('app','Create Participate'), 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage Participate'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Participates') ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
