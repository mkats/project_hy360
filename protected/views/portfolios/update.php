<?php
/* @var $this PortfoliosController */
/* @var $model Portfolios */

$this->breadcrumbs=array(
	'Portfolioses'=>array('index'),
	$model->portfolio_id=>array('view','id'=>$model->portfolio_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Portfolios', 'url'=>array('index')),
	array('label'=>'Create Portfolios', 'url'=>array('create')),
	array('label'=>'View Portfolios', 'url'=>array('view', 'id'=>$model->portfolio_id)),
	array('label'=>'Manage Portfolios', 'url'=>array('admin')),
);
?>

<h1>Update Portfolios <?php echo $model->portfolio_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>