<?php
/* @var $this GovernmentsController */
/* @var $model Governments */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'governments-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
	
	<?php
		// retrieve all parliament_cycles
		$criteria = new CDbCriteria;
		$criteria->order = 'title ASC';
		$parliament_cycles = ParliamentCycles::model()->findAll($criteria);
		$data['parliament_cycles'] = CHtml::listData($parliament_cycles, 'parliament_cycle_id', 'title');
		
		// retrieve all prime_ministers
		$criteria = new CDbCriteria;
		$criteria->order = 'prime_minister_id ASC';
		$prime_ministers = PrimeMinisters::model()->findAll($criteria);
		$data['prime_ministers'] = CHtml::listData($prime_ministers, 'prime_minister_id', 'person.name');
		
		?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'parliament_cycle_id'); ?>
		<?php echo $form->dropDownList($model,'parliament_cycle_id', $data['parliament_cycles'], array('prompt'=>Yii::t('app','Select parliament cycle'))); ?>
		<?php echo $form->error($model,'parliament_cycle_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prime_minister_id'); ?>
		<?php echo $form->dropDownList($model,'prime_minister_id', $data['prime_ministers'], array('prompt'=>Yii::t('app','Select parliament cycle'))); ?>
		<?php echo $form->error($model,'prime_minister_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('app','Create') : Yii::t('app','Save')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->