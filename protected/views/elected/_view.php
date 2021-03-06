<?php
/* @var $this ElectedController */
/* @var $data Elected */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('elected_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->elected_id), array('view', 'id'=>$data->elected_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mp_id')); ?>:</b>
	<?php echo CHtml::encode($data->mp_id); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('person.name')); ?>:</b>
	<?php echo CHtml::link($data->mp->person->name, $this->createAbsoluteUrl('persons/view', array('id'=>$data->mp->person_id))) ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parliament_cycle_id')); ?>:</b>
	<?php echo CHtml::encode($data->parliament_cycle_id); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('parliamentCycle.title')); ?>:</b>
	<?php echo CHtml::link($data->parliamentCycle->title, $this->createAbsoluteUrl('parliamentCycles/view', array('id'=>$data->parliament_cycle_id))) ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('constituency')); ?>:</b>
	<?php echo CHtml::encode($data->constituency); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('independence_timestamp')); ?>:</b>
	<?php echo CHtml::encode($data->independence_timestamp); ?>
	<br />


</div>