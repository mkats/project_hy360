<?php
/* @var $this ParliamentCyclesController */
/* @var $data ParliamentCycles */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('parliament_cycle_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->parliament_cycle_id), array('view', 'id'=>$data->parliament_cycle_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />


</div>