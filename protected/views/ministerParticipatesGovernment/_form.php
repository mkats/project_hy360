<?php
/* @var $this MinisterParticipatesGovernmentController */
/* @var $model MinisterParticipatesGovernment */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'minister-participates-government-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
	
	<?php
		// retrieve all ministers
		$criteria = new CDbCriteria;
		//$criteria->order = 'name ASC';
		$ministers = Ministers::model()->findAll($criteria);
		$data['ministers'] = CHtml::listData($ministers, 'minister_id', 'person.name');
		
		// retrieve all governments
		$criteria = new CDbCriteria;
		//$criteria->order = 'name ASC';
		$governments = Governments::model()->findAll($criteria);
		$data['governments'] = CHtml::listData($governments, 'government_id', 'government_id');
		
		?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'minister_id'); ?>
		<?php echo $form->dropDownList($model,'minister_id', $data['ministers'], array('prompt'=>Yii::t('app','Select minister'))); ?>
		<?php echo $form->error($model,'minister_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'government_id'); ?>
		<?php echo $form->dropDownList($model,'government_id', $data['governments'], array('prompt'=>Yii::t('app','Select government'))); ?>
		<?php echo $form->error($model,'government_id'); ?>
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
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('app','Create') : Yii::t('app','Save')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->