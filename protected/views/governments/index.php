<?php
/* @var $this GovernmentsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Governments',
);

$this->menu=array(
	array('label'=>'Create Governments', 'url'=>array('create')),
	array('label'=>'Manage Governments', 'url'=>array('admin')),
);
?>

<h1>Governments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
