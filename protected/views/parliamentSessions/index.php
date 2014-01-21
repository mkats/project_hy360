<?php
/* @var $this ParliamentSessionsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Parliament Sessions',
);

$this->menu=array(
	array('label'=>'Create ParliamentSessions', 'url'=>array('create')),
	array('label'=>'Manage ParliamentSessions', 'url'=>array('admin')),
);
?>

<h1>Parliament Sessions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
