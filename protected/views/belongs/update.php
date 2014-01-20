<?php
/* @var $this BelongsController */
/* @var $model Belongs */

$this->breadcrumbs=array(
	'Belongs'=>array('index'),
	$model->belongs_id=>array('view','id'=>$model->belongs_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Belongs', 'url'=>array('index')),
	array('label'=>'Create Belongs', 'url'=>array('create')),
	array('label'=>'View Belongs', 'url'=>array('view', 'id'=>$model->belongs_id)),
	array('label'=>'Manage Belongs', 'url'=>array('admin')),
);
?>

<h1>Update Belongs <?php echo $model->belongs_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>