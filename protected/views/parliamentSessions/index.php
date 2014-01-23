<?php
/* @var $this ParliamentSessionsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	Yii::t('app','Parliament Sessions'),
);

$this->menu=array(
	array('label'=>Yii::t('app','Create ParliamentSessions'), 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage ParliamentSessions'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Parliament Sessions') ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
