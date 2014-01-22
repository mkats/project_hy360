<?php
/* @var $this PartiesController */
/* @var $data Parties */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('party_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->party_id), array('view', 'id'=>$data->party_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />


</div>