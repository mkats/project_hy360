<?php
/* @var $this PortfoliosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	Yii::t('app','Portfolioses'),
);

$this->menu=array(
	array('label'=>Yii::t('app','Create Portfolios'), 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage Portfolios'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Portfolioses') ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
