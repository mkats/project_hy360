<?php
/* @var $this PartyLeadersController */
/* @var $model PartyLeaders */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'party-leaders-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
	
	<?php
		// retrieve all persons
		$criteria = new CDbCriteria;
		$criteria->order = 'name ASC';
		$persons = Persons::model()->findAll($criteria);
		$data['persons'] = CHtml::listData($persons, 'person_id', 'name');
		?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'person_id'); ?>
		<?php echo $form->dropDownList($model,'person_id', $data['persons'], array('prompt'=>Yii::t('app','Select person'))); ?>
		<?php echo $form->error($model,'person_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('app','Create') : Yii::t('app','Save')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->