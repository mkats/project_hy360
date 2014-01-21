<?php
/* @var $this LeadsController */
/* @var $model Leads */

$this->breadcrumbs=array(
	'Leads'=>array('index'),
	$model->leads_id=>array('view','id'=>$model->leads_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Leads', 'url'=>array('index')),
	array('label'=>'Create Leads', 'url'=>array('create')),
	array('label'=>'View Leads', 'url'=>array('view', 'id'=>$model->leads_id)),
	array('label'=>'Manage Leads', 'url'=>array('admin')),
);
?>

<h1>Update Leads <?php echo $model->leads_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>