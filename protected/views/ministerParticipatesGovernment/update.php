<?php
/* @var $this MinisterParticipatesGovernmentController */
/* @var $model MinisterParticipatesGovernment */

$this->breadcrumbs=array(
	'Minister Participates Governments'=>array('index'),
	$model->minister_participates_government_id=>array('view','id'=>$model->minister_participates_government_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MinisterParticipatesGovernment', 'url'=>array('index')),
	array('label'=>'Create MinisterParticipatesGovernment', 'url'=>array('create')),
	array('label'=>'View MinisterParticipatesGovernment', 'url'=>array('view', 'id'=>$model->minister_participates_government_id)),
	array('label'=>'Manage MinisterParticipatesGovernment', 'url'=>array('admin')),
);
?>

<h1>Update MinisterParticipatesGovernment <?php echo $model->minister_participates_government_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>