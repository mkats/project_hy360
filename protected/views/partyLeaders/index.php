<?php
/* @var $this PartyLeadersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Party Leaders',
);

$this->menu=array(
	array('label'=>'Create PartyLeaders', 'url'=>array('create')),
	array('label'=>'Manage PartyLeaders', 'url'=>array('admin')),
);
?>

<h1>Party Leaders</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
