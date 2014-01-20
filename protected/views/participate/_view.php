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

	<b><?php echo CHtml::encode($data->getAttributeLabel('parliament_cycle_id')); ?>:</b>
	<?php echo CHtml::encode($data->parliament_cycle_id); ?>
	<br />


</div>