<?php
/* @var $this AnsweredByController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Answered Bies',
);

$this->menu=array(
	array('label'=>'Create AnsweredBy', 'url'=>array('create')),
	array('label'=>'Manage AnsweredBy', 'url'=>array('admin')),
);
?>

<h1>Answered Bies</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
