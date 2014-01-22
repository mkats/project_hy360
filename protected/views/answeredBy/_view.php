<?php
/* @var $this AnsweredByController */
/* @var $data AnsweredBy */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('answered_by_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->answered_by_id), array('view', 'id'=>$data->answered_by_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('interpellation_id')); ?>:</b>
	<?php echo CHtml::encode($data->interpellation_id); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('interpellation.description')); ?>:</b>
	<?php echo CHtml::link($data->interpellation->description, $this->createAbsoluteUrl('interpellations/view', array('id'=>$data->interpellation_id))) ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('minister_id')); ?>:</b>
	<?php echo CHtml::encode($data->minister_id); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('minister.person.name')); ?>:</b>
	<?php echo CHtml::link($data->minister->person->name, $this->createAbsoluteUrl('ministers/view', array('id'=>$data->minister_id))) ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('timestamp')); ?>:</b>
	<?php echo CHtml::encode($data->timestamp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('answer')); ?>:</b>
	<?php echo CHtml::encode($data->answer); ?>
	<br />


</div>