<?php
/* @var $this PrimeMinistersController */
/* @var $model PrimeMinisters */

$this->breadcrumbs=array(
	'Prime Ministers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PrimeMinisters', 'url'=>array('index')),
	array('label'=>'Manage PrimeMinisters', 'url'=>array('admin')),
);
?>

<h1>Create PrimeMinisters</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>