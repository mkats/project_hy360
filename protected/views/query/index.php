<?php
/* @var $this QueryController */
/* @var $dataProvider ext.SDataProvider */

$this->breadcrumbs=array(
	Yii::t('app', 'SQL Queries'),
);
?>
<h1><?php echo Yii::t('app', 'SQL Queries') ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>