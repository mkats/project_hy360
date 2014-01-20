<?php
/* @var $this LeadsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Leads',
);

$this->menu=array(
	array('label'=>'Create Leads', 'url'=>array('create')),
	array('label'=>'Manage Leads', 'url'=>array('admin')),
);
?>

<h1>Leads</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
