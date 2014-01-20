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

	<b><?php echo CHtml::encode($data->getAttributeLabel('government_id')); ?>:</b>
	<?php echo CHtml::encode($data->government_id); ?>
	<br />


</div>