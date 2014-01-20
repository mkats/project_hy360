<?php
/* @var $this PartiesController */
/* @var $model Parties */

$this->breadcrumbs=array(
	'Parties'=>array('index'),
	$model->name=>array('view','id'=>$model->party_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Parties', 'url'=>array('index')),
	array('label'=>'Create Parties', 'url'=>array('create')),
	array('label'=>'View Parties', 'url'=>array('view', 'id'=>$model->party_id)),
	array('label'=>'Manage Parties', 'url'=>array('admin')),
);
?>

<h1>Update Parties <?php echo $model->party_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>