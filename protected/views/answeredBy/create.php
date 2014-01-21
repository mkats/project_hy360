<?php
/* @var $this AnsweredByController */
/* @var $model AnsweredBy */

$this->breadcrumbs=array(
	'Answered Bies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AnsweredBy', 'url'=>array('index')),
	array('label'=>'Manage AnsweredBy', 'url'=>array('admin')),
);
?>

<h1>Create AnsweredBy</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>