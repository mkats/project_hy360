<?php
/* @var $this PersonsOccupationsController */
/* @var $data PersonsOccupations */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('persons_occupations_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->persons_occupations_id), array('view', 'id'=>$data->persons_occupations_id)); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('occupation')); ?>:</b>
	<?php echo CHtml::encode($data->occupation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subject')); ?>:</b>
	<?php echo CHtml::encode($data->subject); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('person_id')); ?>:</b>
	<?php echo CHtml::encode($data->person_id); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('person.name')); ?>:</b>
	<?php echo CHtml::link($data->person->name, $this->createAbsoluteUrl('persons/view', array('id'=>$data->person_id))) ?>
	<br />
	

</div>