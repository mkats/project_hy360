<?php
/* @var $this AnsweredByController */
/* @var $model AnsweredBy */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'answered-by-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
	
	<?php
		// retrieve all interpellations
		$criteria = new CDbCriteria;
		//$criteria->order = 'name ASC';
		$interpellations = Interpellations::model()->findAll($criteria);
		$data['interpellations'] = CHtml::listData($interpellations, 'interpellation_id', 'description');
		
		// retrieve all ministers
		$criteria = new CDbCriteria;
		//$criteria->order = 'name ASC';
		$ministers = Ministers::model()->findAll($criteria);
		$data['ministers'] = CHtml::listData($ministers, 'minister_id', 'person.name');
		?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'interpellation_id'); ?>
		<?php echo $form->dropDownList($model,'interpellation_id', $data['interpellations'], array('prompt'=>Yii::t('app','Select interpellation'))); ?>
		<?php echo $form->error($model,'interpellation_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'minister_id'); ?>
		<?php echo $form->dropDownList($model,'minister_id', $data['ministers'], array('prompt'=>Yii::t('app','Select minister'))); ?>
		<?php echo $form->error($model,'minister_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'timestamp'); ?>
		<?php echo $form->textField($model,'timestamp'); ?>
		<?php echo $form->error($model,'timestamp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'answer'); ?>
		<?php echo $form->textField($model,'answer',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'answer'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('app','Create') : Yii::t('app','Save')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->