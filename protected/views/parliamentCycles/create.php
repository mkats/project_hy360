<?php
/* @var $this ParliamentCyclesController */
/* @var $model ParliamentCycles */

$this->breadcrumbs=array(
	'Parliament Cycles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ParliamentCycles', 'url'=>array('index')),
	array('label'=>'Manage ParliamentCycles', 'url'=>array('admin')),
);
?>

<h1>Create ParliamentCycles</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>