<?php
/* @var $this PortfoliosController */
/* @var $data Portfolios */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('portfolio_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->portfolio_id), array('view', 'id'=>$data->portfolio_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subject')); ?>:</b>
	<?php echo CHtml::encode($data->subject); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('start_timestamp')); ?>:</b>
	<?php echo CHtml::encode($data->start_timestamp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('end_timestamp')); ?>:</b>
	<?php echo CHtml::encode($data->end_timestamp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('minister_id')); ?>:</b>
	<?php echo CHtml::encode($data->minister_id); ?>
	<br />


</div>