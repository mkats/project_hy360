<?php
/* @var $this BelongsController */
/* @var $model Belongs */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'belongs-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
	
	<?php
		// retrieve all persons
		$criteria = new CDbCriteria;
		$criteria->order = 'mp_id ASC';
		$mps = Mps::model()->findAll($criteria);
		$data['mps'] = CHtml::listData($mps, 'mp_id', 'person.name');
	
		// retrieve all parties
		$criteria = new CDbCriteria;
		$criteria->order = 'name ASC';
		$parties = Parties::model()->findAll($criteria);
		$data['parties'] = CHtml::listData($parties, 'party_id', 'name');
		?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'mp_id'); ?>
		<?php echo $form->dropDownList($model,'mp_id', $data['mps'], array('prompt'=>'Select MP')); ?>
		<?php echo $form->error($model,'mp_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'party_id'); ?>
		<?php echo $form->dropDownList($model,'party_id', $data['parties'], array('prompt'=>'Select party')); ?>
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