<?php
/* @var $this PartyLeadersController */
/* @var $model PartyLeaders */

$this->breadcrumbs=array(
	'Party Leaders'=>array('index'),
	$model->party_leader_id,
);

$this->menu=array(
	array('label'=>'List PartyLeaders', 'url'=>array('index')),
	array('label'=>'Create PartyLeaders', 'url'=>array('create')),
	array('label'=>'Update PartyLeaders', 'url'=>array('update', 'id'=>$model->party_leader_id)),
	array('label'=>'Delete PartyLeaders', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->party_leader_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PartyLeaders', 'url'=>array('admin')),
);
?>

<h1>View PartyLeaders #<?php echo $model->party_leader_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'party_leader_id',
		'person_id',
	),
)); ?>
