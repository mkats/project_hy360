<?php
/* @var $this GovernmentHasPrimeMinisterController */
/* @var $model GovernmentHasPrimeMinister */

$this->breadcrumbs=array(
	'Government Has Prime Ministers'=>array('index'),
	$model->government_has_prime_minister_id=>array('view','id'=>$model->government_has_prime_minister_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List GovernmentHasPrimeMinister', 'url'=>array('index')),
	array('label'=>'Create GovernmentHasPrimeMinister', 'url'=>array('create')),
	array('label'=>'View GovernmentHasPrimeMinister', 'url'=>array('view', 'id'=>$model->government_has_prime_minister_id)),
	array('label'=>'Manage GovernmentHasPrimeMinister', 'url'=>array('admin')),
);
?>

<h1>Update GovernmentHasPrimeMinister <?php echo $model->government_has_prime_minister_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>