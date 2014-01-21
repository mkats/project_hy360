<?php
/* @var $this MpsController */
/* @var $data Mps */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('mp_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->mp_id), array('view', 'id'=>$data->mp_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('person_id')); ?>:</b>
	<?php echo CHtml::encode($data->person_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('person.name')); ?>:</b>
	<?php echo CHtml::link($data->person->name, $this->createAbsoluteUrl('persons/view', array('id'=>$data->person_id))) ?>

</div>