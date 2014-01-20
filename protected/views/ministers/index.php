<?php
/* @var $this MinistersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ministers',
);

$this->menu=array(
	array('label'=>'Create Ministers', 'url'=>array('create')),
	array('label'=>'Manage Ministers', 'url'=>array('admin')),
);
?>

<h1>Ministers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
