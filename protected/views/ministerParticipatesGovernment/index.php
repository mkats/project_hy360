<?php
/* @var $this MinisterParticipatesGovernmentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Minister Participates Governments',
);

$this->menu=array(
	array('label'=>'Create MinisterParticipatesGovernment', 'url'=>array('create')),
	array('label'=>'Manage MinisterParticipatesGovernment', 'url'=>array('admin')),
);
?>

<h1>Minister Participates Governments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
