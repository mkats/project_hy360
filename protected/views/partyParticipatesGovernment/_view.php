<?php
/* @var $this PartyParticipatesGovernmentController */
/* @var $data PartyParticipatesGovernment */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('party_participates_government_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->party_participates_government_id), array('view', 'id'=>$data->party_participates_government_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('party_id')); ?>:</b>
	<?php echo CHtml::encode($data->party_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('government_id')); ?>:</b>
	<?php echo CHtml::encode($data->government_id); ?>
	<br />


</div>