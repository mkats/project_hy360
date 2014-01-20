<?php
/* @var $this PartyLeadersController */
/* @var $data PartyLeaders */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('party_leader_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->party_leader_id), array('view', 'id'=>$data->party_leader_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('person_id')); ?>:</b>
	<?php echo CHtml::encode($data->person_id); ?>
	<br />


</div>