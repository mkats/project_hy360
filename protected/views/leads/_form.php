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
	
	<?php
		// retrieve all party leaders
		$criteria = new CDbCriteria;
		$criteria->order = 'party_leader_id ASC';
		$party_leaders = PartyLeaders::model()->findAll($criteria);
		$data['party_leaders'] = CHtml::listData($party_leaders, 'party_leader_id', 'person.name');
		
		// retrieve all parties
		$criteria = new CDbCriteria;
		$criteria->order = 'name ASC';
		$parties = Parties::model()->findAll($criteria);
		$data['parties'] = CHtml::listData($parties, 'party_id', 'name');
		?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'party_leader_id'); ?>
		<?php echo $form->dropDownList($model,'party_leader_id', $data['party_leaders'], array('prompt'=>Yii::t('app','Select party leader'))); ?>
		<?php echo $form->error($model,'party_leader_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'party_id'); ?>
		<?php echo $form->dropDownList($model,'party_id', $data['parties'], array('prompt'=>Yii::t('app','Select party'))); ?>
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
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('app','Create') : Yii::t('app','Save')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->