<?php
/* @var $this PortfoliosController */
/* @var $model Portfolios */

$this->breadcrumbs=array(
	'Portfolioses'=>array('index'),
	$model->portfolio_id,
);

$this->menu=array(
	array('label'=>'List Portfolios', 'url'=>array('index')),
	array('label'=>'Create Portfolios', 'url'=>array('create')),
	array('label'=>'Update Portfolios', 'url'=>array('update', 'id'=>$model->portfolio_id)),
	array('label'=>'Delete Portfolios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->portfolio_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Portfolios', 'url'=>array('admin')),
);
?>

<h1>View Portfolios #<?php echo $model->portfolio_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'portfolio_id',
		'subject',
		'start_timestamp',
		'end_timestamp',
		'minister_id',
		array(
					'label' => "Person name",
					'type' => "raw",
					'value' => CHtml::link($model->minister->person->name, $this->createAbsoluteUrl('persons/view', array('id'=>$model->minister->person_id)))
			),
	),
)); ?>
