<?php
/* @var $this InterpellationsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Interpellations',
);

$this->menu=array(
	array('label'=>'Create Interpellations', 'url'=>array('create')),
	array('label'=>'Manage Interpellations', 'url'=>array('admin')),
);
?>

<h1>Interpellations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
