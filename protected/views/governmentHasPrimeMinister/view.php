<?php
/* @var $this GovernmentHasPrimeMinisterController */
/* @var $model GovernmentHasPrimeMinister */

$this->breadcrumbs=array(
	'Government Has Prime Ministers'=>array('index'),
	$model->government_has_prime_minister_id,
);

$this->menu=array(
	array('label'=>'List GovernmentHasPrimeMinister', 'url'=>array('index')),
	array('label'=>'Create GovernmentHasPrimeMinister', 'url'=>array('create')),
	array('label'=>'Update GovernmentHasPrimeMinister', 'url'=>array('update', 'id'=>$model->government_has_prime_minister_id)),
	array('label'=>'Delete GovernmentHasPrimeMinister', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->government_has_prime_minister_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GovernmentHasPrimeMinister', 'url'=>array('admin')),
);
?>

<h1>View GovernmentHasPrimeMinister #<?php echo $model->government_has_prime_minister_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'government_has_prime_minister_id',
		'government_id',
		'prime_minister_id',
	),
)); ?>
