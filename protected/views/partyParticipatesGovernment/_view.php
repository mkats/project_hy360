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
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('party name')); ?>:</b>
	<?php echo CHtml::link($data->party->name, $this->createAbsoluteUrl('parties/view', array('id'=>$data->party_id))) ?>
	<br />
	
	<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('government_id')); ?>:</b>
	<?php echo CHtml::encode($data->government_id); ?>
	<br />
	-->	
 
	<b><?php echo CHtml::encode($data->getAttributeLabel('government_id')); ?>:</b>
	<?php echo CHtml::link($data->government_id, $this->createAbsoluteUrl('governments/view', array('id'=>$data->government_id))) ?>
	<br />
	
	<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('government.parliament_cycle')); ?>:</b>
	<?php echo CHtml::link($data->government->parliamentCycle->title, $this->createAbsoluteUrl('parliamentCycles/view', array('id'=>$data->government->parliament_cycle_id))) ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('Prime minister')); ?>:</b>
	<?php echo CHtml::link($data->government->primeMinister->person->name, $this->createAbsoluteUrl('primeMinisters/view', array('id'=>$data->government->prime_minister_id))) ?>
	<br />
	 -->


</div>