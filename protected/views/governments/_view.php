<?php
/* @var $this GovernmentsController */
/* @var $data Governments */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('government_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->government_id), array('view', 'id'=>$data->government_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parliament_cycle_id')); ?>:</b>
	<?php echo CHtml::encode($data->parliament_cycle_id); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('parliamentCycle.title')); ?>:</b>
	<?php echo CHtml::link($data->parliamentCycle->title, $this->createAbsoluteUrl('parliamentCycles/view', array('id'=>$data->parliament_cycle_id))) ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prime_minister_id')); ?>:</b>
	<?php echo CHtml::encode($data->prime_minister_id); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('primeMinister.person.name')); ?>:</b>
	<?php echo CHtml::link($data->primeMinister->person->name, $this->createAbsoluteUrl('primeMinisters/view', array('id'=>$data->prime_minister_id))) ?>
	<br />


</div>