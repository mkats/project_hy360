<?php
/* @var $this ParliamentSessionsController */
/* @var $data ParliamentSessions */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('parliament_session_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->parliament_session_id), array('view', 'id'=>$data->parliament_session_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('timestamp')); ?>:</b>
	<?php echo CHtml::encode($data->timestamp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parliament_cycle_id')); ?>:</b>
	<?php echo CHtml::encode($data->parliament_cycle_id); ?>
	<br />
	
	<b><?php echo CHtml::encode("Parliament cycle name"/*$data->getAttributeLabel('person.name')*/); ?>:</b>
	<?php echo CHtml::link($data->parliamentCycle->title, $this->createAbsoluteUrl('ParliamentCycles/view', array('id'=>$data->parliament_cycle_id))) ?>
	<br />


</div>