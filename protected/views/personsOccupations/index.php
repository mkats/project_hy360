<?php
/* @var $this PersonsOccupationsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Persons Occupations',
);

$this->menu=array(
	array('label'=>'Create PersonsOccupations', 'url'=>array('create')),
	array('label'=>'Manage PersonsOccupations', 'url'=>array('admin')),
);
?>

<h1>Persons Occupations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
