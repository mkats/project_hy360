<?php
/* @var $this PrimeMinistersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Prime Ministers',
);

$this->menu=array(
	array('label'=>'Create PrimeMinisters', 'url'=>array('create')),
	array('label'=>'Manage PrimeMinisters', 'url'=>array('admin')),
);
?>

<h1>Prime Ministers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
