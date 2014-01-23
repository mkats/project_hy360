<?php
/* @var $this PartyParticipatesGovernmentController */
/* @var $model PartyParticipatesGovernment */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'party-participates-government-form',
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
		
		// retrieve all governments
		$criteria = new CDbCriteria;
		//$criteria->order = 'name ASC';
		$governments = Governments::model()->findAll($criteria);
		$data['governments'] = CHtml::listData($governments, 'government_id', 'government_id');
		?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'party_id'); ?>
		<?php echo $form->dropDownList($model,'party_id', $data['parties'], array('prompt'=>Yii::t('app','Select party'))); ?>
		<?php echo $form->error($model,'party_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'government_id'); ?>
		<?php echo $form->dropDownList($model,'government_id', $data['governments'], array('prompt'=>Yii::t('app','Select government'))); ?>
		<?php echo $form->error($model,'government_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('app','Create') : Yii::t('app','Save')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->