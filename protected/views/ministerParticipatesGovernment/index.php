<?php
/* @var $this MinisterParticipatesGovernmentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	Yii::t('app','Minister Participates Governments'),
);

$this->menu=array(
	array('label'=>Yii::t('app','Create MinisterParticipatesGovernment'), 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage MinisterParticipatesGovernment'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Minister Participates Governments') ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
