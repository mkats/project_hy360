<?php
/* @var $this ParliamentCyclesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Parliament Cycles',
);

$this->menu=array(
	array('label'=>'Create ParliamentCycles', 'url'=>array('create')),
	array('label'=>'Manage ParliamentCycles', 'url'=>array('admin')),
);
?>

<h1>Parliament Cycles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
