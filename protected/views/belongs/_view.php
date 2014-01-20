<?php
/* @var $this BelongsController */
/* @var $data Belongs */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('belongs_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->belongs_id), array('view', 'id'=>$data->belongs_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mp_id')); ?>:</b>
	<?php echo CHtml::encode($data->mp_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('party_id')); ?>:</b>
	<?php echo CHtml::encode($data->party_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('start_timestamp')); ?>:</b>
	<?php echo CHtml::encode($data->start_timestamp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('end_timestamp')); ?>:</b>
	<?php echo CHtml::encode($data->end_timestamp); ?>
	<br />


</div>