<?php
/* @var $this ElectedController */
/* @var $model Elected */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'elected-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'mp_id'); ?>
		<?php echo $form->textField($model,'mp_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'mp_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parliament_cycle_id'); ?>
		<?php echo $form->textField($model,'parliament_cycle_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'parliament_cycle_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'constituency'); ?>
		<?php echo $form->textField($model,'constituency',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'constituency'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'independence_timestamp'); ?>
		<?php echo $form->textField($model,'independence_timestamp'); ?>
		<?php echo $form->error($model,'independence_timestamp'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->