<?php
/* @var $this InterpellationsController */
/* @var $model Interpellations */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'interpellations-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<?php
		// retrieve all parliament_sessions
		$criteria = new CDbCriteria;
		//$criteria->order = 'name ASC';
		$parliament_sessions = ParliamentSessions::model()->findAll($criteria);
		$data['parliament_sessions'] = CHtml::listData($parliament_sessions, 'parliament_session_id', 'timestamp');
	
		// retrieve all MPs
		$criteria = new CDbCriteria;
		//$criteria->order = 'name ASC';
		$mps = Mps::model()->findAll($criteria);
		$data['mps'] = CHtml::listData($mps, 'mp_id', 'person.name');
		?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category'); ?>
		<?php echo $form->textField($model,'category',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'category'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parliament_session_id'); ?>
		<?php echo $form->dropDownList($model,'parliament_session_id', $data['parliament_sessions'], array('prompt'=>'Select parliament session')); ?>
		<?php echo $form->error($model,'parliament_session_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mp_id'); ?>
		<?php echo $form->dropDownList($model,'mp_id', $data['mps'], array('prompt'=>'Select MP')); ?>
		<?php echo $form->error($model,'mp_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->