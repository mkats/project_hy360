<?php
/* @var $this BelongsController */
/* @var $model Belongs */

$this->breadcrumbs=array(
	'Belongs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Belongs', 'url'=>array('index')),
	array('label'=>'Manage Belongs', 'url'=>array('admin')),
);
?>

<h1>Create Belongs</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>