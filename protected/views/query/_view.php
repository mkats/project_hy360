<?php
/* @var $this QueryController */
/* @var $data Query */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('brief')); ?>:</b>
	<?php echo "<br />".CHtml::encode($data->brief); ?>
	<br />


</div>