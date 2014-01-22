<?php
/* @var $this MinisterParticipatesGovernmentController */
/* @var $data MinisterParticipatesGovernment */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('minister_participates_government_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->minister_participates_government_id), array('view', 'id'=>$data->minister_participates_government_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('minister_id')); ?>:</b>
	<?php echo CHtml::encode($data->minister_id); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('Minister Name')); ?>:</b>
	<?php echo CHtml::link($data->minister->person->name, $this->createAbsoluteUrl('ministers/view', array('id'=>$data->minister_id))) ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('government_id')); ?>:</b>
	<?php echo CHtml::encode($data->government_id); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('government_id')); ?>:</b>
	<?php echo CHtml::link($data->government->government_id, $this->createAbsoluteUrl('governments/view', array('id'=>$data->government_id))) ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('start_timestamp')); ?>:</b>
	<?php echo CHtml::encode($data->start_timestamp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('end_timestamp')); ?>:</b>
	<?php echo CHtml::encode($data->end_timestamp); ?>
	<br />


</div>