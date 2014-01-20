<?php
/* @var $this PrimeMinistersController */
/* @var $model PrimeMinisters */

$this->breadcrumbs=array(
	'Prime Ministers'=>array('index'),
	$model->prime_minister_id=>array('view','id'=>$model->prime_minister_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PrimeMinisters', 'url'=>array('index')),
	array('label'=>'Create PrimeMinisters', 'url'=>array('create')),
	array('label'=>'View PrimeMinisters', 'url'=>array('view', 'id'=>$model->prime_minister_id)),
	array('label'=>'Manage PrimeMinisters', 'url'=>array('admin')),
);
?>

<h1>Update PrimeMinisters <?php echo $model->prime_minister_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>