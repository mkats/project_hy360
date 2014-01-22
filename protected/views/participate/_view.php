<?php
/* @var $this ParticipateController */
/* @var $data Participate */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('participate_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->participate_id), array('view', 'id'=>$data->participate_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('party_id')); ?>:</b>
	<?php echo CHtml::encode($data->party_id); ?>
	<br />

	<b><?php echo CHtml::encode("Party name"/*$data->getAttributeLabel('person.name')*/); ?>:</b>
	<?php echo CHtml::link($data->party->name, $this->createAbsoluteUrl('parties/view', array('id'=>$data->party_id))) ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parliament_cycle_id')); ?>:</b>
	<?php echo CHtml::encode($data->parliament_cycle_id); ?>
	<br />

	<b><?php echo CHtml::encode("Parliament cycle name"/*$data->getAttributeLabel('person.name')*/); ?>:</b>
	<?php echo CHtml::link($data->parliamentCycle->title, $this->createAbsoluteUrl('ParliamentCycles/view', array('id'=>$data->parliament_cycle_id))) ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('electoral_percentage')); ?>:</b>
	<?php echo CHtml::encode($data->electoral_percentage); ?>
	<br />


</div>