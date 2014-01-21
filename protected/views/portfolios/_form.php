<?php
/* @var $this PortfoliosController */
/* @var $model Portfolios */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'portfolios-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
	
	<?php
		// retrieve all persons
		$criteria = new CDbCriteria;
		//$criteria->order = 'name ASC';
		$ministers = Ministers::model()->findAll($criteria);
		$data['ministers'] = CHtml::listData($ministers, 'minister_id', 'person.name');
		?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'subject'); ?>
		<?php echo $form->textField($model,'subject',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'subject'); ?>
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

	<div class="row">
		<?php echo $form->labelEx($model,'minister_id'); ?>
		<?php echo $form->dropDownList($model,'minister_id', $data['ministers'], array('prompt'=>'Select minister')); ?>
		<?php echo $form->error($model,'minister_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->