<?php
/* @var $this PrimeMinistersController */
/* @var $data PrimeMinisters */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('prime_minister_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->prime_minister_id), array('view', 'id'=>$data->prime_minister_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('person_id')); ?>:</b>
	<?php echo CHtml::encode($data->person_id); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('person.name')); ?>:</b>
	<?php echo CHtml::link($data->person->name, $this->createAbsoluteUrl('persons/view', array('id'=>$data->person_id))) ?>
	<br />

</div>