<?php
/* @var $this PersonsOccupationsController */
/* @var $model PersonsOccupations */

$this->breadcrumbs=array(
	'Persons Occupations'=>array('index'),
	$model->persons_occupations_id,
);

$this->menu=array(
	array('label'=>'List PersonsOccupations', 'url'=>array('index')),
	array('label'=>'Create PersonsOccupations', 'url'=>array('create')),
	array('label'=>'Update PersonsOccupations', 'url'=>array('update', 'id'=>$model->persons_occupations_id)),
	array('label'=>'Delete PersonsOccupations', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->persons_occupations_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PersonsOccupations', 'url'=>array('admin')),
);
?>

<h1>View PersonsOccupations #<?php echo $model->persons_occupations_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'persons_occupations_id',
		'subject',
		'person_id',
	),
)); ?>
