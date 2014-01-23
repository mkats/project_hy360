<?php
/* @var $this PrimeMinistersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	Yii::t('app','Prime Ministers'),
);

$this->menu=array(
	array('label'=>Yii::t('app','Create PrimeMinisters'), 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage PrimeMinisters'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Prime Ministers') ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
