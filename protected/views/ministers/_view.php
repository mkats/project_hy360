<?php
/* @var $this MinistersController */
/* @var $data Ministers */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('minister_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->minister_id), array('view', 'id'=>$data->minister_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('person_id')); ?>:</b>
	<?php echo CHtml::encode($data->person_id); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('person.name')); ?>:</b>
	<?php echo CHtml::link($data->person->name, $this->createAbsoluteUrl('persons/view', array('id'=>$data->person_id))) ?>


</div>