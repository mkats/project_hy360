<?php
/* @var $this LeadsController */
/* @var $data Leads */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('leads_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->leads_id), array('view', 'id'=>$data->leads_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('party_leader_id')); ?>:</b>
	<?php echo CHtml::encode($data->party_leader_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('party_id')); ?>:</b>
	<?php echo CHtml::encode($data->party_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('start_timestamp')); ?>:</b>
	<?php echo CHtml::encode($data->start_timestamp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('end_timestamp')); ?>:</b>
	<?php echo CHtml::encode($data->end_timestamp); ?>
	<br />


</div>