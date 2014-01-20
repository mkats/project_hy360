<?php
/* @var $this PersonsOccupationsController */
/* @var $model PersonsOccupations */

$this->breadcrumbs=array(
	'Persons Occupations'=>array('index'),
	$model->persons_occupations_id=>array('view','id'=>$model->persons_occupations_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PersonsOccupations', 'url'=>array('index')),
	array('label'=>'Create PersonsOccupations', 'url'=>array('create')),
	array('label'=>'View PersonsOccupations', 'url'=>array('view', 'id'=>$model->persons_occupations_id)),
	array('label'=>'Manage PersonsOccupations', 'url'=>array('admin')),
);
?>

<h1>Update PersonsOccupations <?php echo $model->persons_occupations_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>