<?php
/* @var $this GovernmentHasPrimeMinisterController */
/* @var $data GovernmentHasPrimeMinister */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('government_has_prime_minister_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->government_has_prime_minister_id), array('view', 'id'=>$data->government_has_prime_minister_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('government_id')); ?>:</b>
	<?php echo CHtml::encode($data->government_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prime_minister_id')); ?>:</b>
	<?php echo CHtml::encode($data->prime_minister_id); ?>
	<br />


</div>