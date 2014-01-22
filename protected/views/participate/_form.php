<?php
/* @var $this ParticipateController */
/* @var $model Participate */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'participate-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<?php
		// retrieve all parties
		$criteria = new CDbCriteria;
		$criteria->order = 'name ASC';
		$parties = Parties::model()->findAll($criteria);
		$data['parties'] = CHtml::listData($parties, 'party_id', 'name');
		
		// retrieve all parliament_cycles
		$criteria = new CDbCriteria;
		$criteria->order = 'title ASC';
		$parliament_cycles = ParliamentCycles::model()->findAll($criteria);
		$data['parliament_cycles'] = CHtml::listData($parliament_cycles, 'parliament_cycle_id', 'title');
		
		
		?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'party_id'); ?>
		<?php echo $form->dropDownList($model,'party_id', $data['parties'], array('prompt'=>'Select party')); ?>
		<?php echo $form->error($model,'party_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parliament_cycle_id'); ?>
		<?php echo $form->dropDownList($model,'parliament_cycle_id', $data['parliament_cycles'], array('prompt'=>'Select parliament cycle')); ?>
		<?php echo $form->error($model,'parliament_cycle_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'electoral_percentage'); ?>
		<?php echo $form->textField($model,'electoral_percentage'); ?>
		<?php echo $form->error($model,'electoral_percentage'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->