<?php
/* @var $this PersonsOccupationsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	Yii::t('app','Persons Occupations'),
);

$this->menu=array(
	array('label'=>Yii::t('app','Create PersonsOccupations'), 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage PersonsOccupations'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Persons Occupations') ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
