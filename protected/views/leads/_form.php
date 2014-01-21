<?php
/* @var $this LeadsController */
/* @var $model Leads */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'leads-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'party_leader_id'); ?>
		<?php echo $form->textField($model,'party_leader_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'party_leader_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'party_id'); ?>
		<?php echo $form->textField($model,'party_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'party_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'start_timestamp'); ?>
		<?php echo $form->textField($model,'start_timestamp'); ?>
		<?php echo $form->error($model,'start_timestamp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'end_timestamp'); ?>
		<?php echo $form->textField($model,'end_timestamp'); ?>
		<?php echo $form->error($model,'end_timestamp'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->