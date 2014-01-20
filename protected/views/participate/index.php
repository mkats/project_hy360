<?php
/* @var $this ParticipateController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Participates',
);

$this->menu=array(
	array('label'=>'Create Participate', 'url'=>array('create')),
	array('label'=>'Manage Participate', 'url'=>array('admin')),
);
?>

<h1>Participates</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
