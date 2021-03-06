<?php
/* @var $this BelongsController */
/* @var $model Belongs */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'belongs_id'); ?>
		<?php echo $form->textField($model,'belongs_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mp_id'); ?>
		<?php echo $form->textField($model,'mp_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'party_id'); ?>
		<?php echo $form->textField($model,'party_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'start_timestamp'); ?>
		<?php echo $form->textField($model,'start_timestamp'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'end_timestamp'); ?>
		<?php echo $form->textField($model,'end_timestamp'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->