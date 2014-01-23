<?php
/* @var $this ParliamentCyclesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	Yii::t('app','Parliament Cycles'),
);

$this->menu=array(
	array('label'=>Yii::t('app','Create ParliamentCycles'), 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage ParliamentCycles'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Parliament Cycles') ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
