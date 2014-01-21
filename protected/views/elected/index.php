<?php
/* @var $this ElectedController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Electeds',
);

$this->menu=array(
	array('label'=>'Create Elected', 'url'=>array('create')),
	array('label'=>'Manage Elected', 'url'=>array('admin')),
);
?>

<h1>Electeds</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
