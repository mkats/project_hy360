<?php
/* @var $this PartyLeadersController */
/* @var $model PartyLeaders */

$this->breadcrumbs=array(
	'Party Leaders'=>array('index'),
	$model->party_leader_id=>array('view','id'=>$model->party_leader_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PartyLeaders', 'url'=>array('index')),
	array('label'=>'Create PartyLeaders', 'url'=>array('create')),
	array('label'=>'View PartyLeaders', 'url'=>array('view', 'id'=>$model->party_leader_id)),
	array('label'=>'Manage PartyLeaders', 'url'=>array('admin')),
);
?>

<h1>Update PartyLeaders <?php echo $model->party_leader_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>