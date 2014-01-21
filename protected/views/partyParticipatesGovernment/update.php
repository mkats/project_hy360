<?php
/* @var $this PartyParticipatesGovernmentController */
/* @var $model PartyParticipatesGovernment */

$this->breadcrumbs=array(
	'Party Participates Governments'=>array('index'),
	$model->party_participates_government_id=>array('view','id'=>$model->party_participates_government_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PartyParticipatesGovernment', 'url'=>array('index')),
	array('label'=>'Create PartyParticipatesGovernment', 'url'=>array('create')),
	array('label'=>'View PartyParticipatesGovernment', 'url'=>array('view', 'id'=>$model->party_participates_government_id)),
	array('label'=>'Manage PartyParticipatesGovernment', 'url'=>array('admin')),
);
?>

<h1>Update PartyParticipatesGovernment <?php echo $model->party_participates_government_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>