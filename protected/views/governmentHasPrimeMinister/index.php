<?php
/* @var $this GovernmentHasPrimeMinisterController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Government Has Prime Ministers',
);

$this->menu=array(
	array('label'=>'Create GovernmentHasPrimeMinister', 'url'=>array('create')),
	array('label'=>'Manage GovernmentHasPrimeMinister', 'url'=>array('admin')),
);
?>

<h1>Government Has Prime Ministers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
