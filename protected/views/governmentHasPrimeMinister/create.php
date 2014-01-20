<?php
/* @var $this GovernmentHasPrimeMinisterController */
/* @var $model GovernmentHasPrimeMinister */

$this->breadcrumbs=array(
	'Government Has Prime Ministers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GovernmentHasPrimeMinister', 'url'=>array('index')),
	array('label'=>'Manage GovernmentHasPrimeMinister', 'url'=>array('admin')),
);
?>

<h1>Create GovernmentHasPrimeMinister</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>