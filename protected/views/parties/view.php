<?php
/* @var $this PartiesController */
/* @var $model Parties */

$this->breadcrumbs=array(
	'Parties'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Parties', 'url'=>array('index')),
	array('label'=>'Create Parties', 'url'=>array('create')),
	array('label'=>'Update Parties', 'url'=>array('update', 'id'=>$model->party_id)),
	array('label'=>'Delete Parties', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->party_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Parties', 'url'=>array('admin')),
);
?>

<h1>View Parties #<?php echo $model->party_id; ?></h1>

<?php
	$belongs = $model->belongs;
	//$party_mp_names= Array();
	$party_mp_names_str= "";
	foreach($belongs as $belong) {
		//array_push($party_mp_names, $belong->mp/*->person->name*/);
		$party_mp_names_str = $party_mp_names_str.
				CHtml::link($belong->mp->person->name, $this->createAbsoluteUrl('mps/view', array('id'=>$belong->mp_id)))."<br />";
	}
	//$data['party_mp_names'] = CHtml::listData($party_mp_names, '?', '?');
	//print_r($party_mp_names);
	
	// Didn't work: @see http://stackoverflow.com/questions/16237758/accessing-data-in-a-many-to-many-and-one-to-many-relations
	//$currentParty = Parties::model()->with('parties', 'belongs')->findByPk($model->party_id);
    //$partyMPs = $currentUser->parties->belongs;
	//print_r($partyMPs);
	?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'party_id',
		'name',
		array (
			'name' => "MP names",
			'type' => 'raw',
			'value' => $party_mp_names_str,
		),
	),
)); ?>
