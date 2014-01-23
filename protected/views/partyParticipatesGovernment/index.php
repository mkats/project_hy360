<?php
/* @var $this PartyParticipatesGovernmentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	Yii::t('app','Party Participates Governments'),
);

$this->menu=array(
	array('label'=>Yii::t('app','Create PartyParticipatesGovernment'), 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage PartyParticipatesGovernment'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Party Participates Governments') ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
