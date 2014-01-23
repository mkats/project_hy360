<?php
/* @var $this ElectedController */
/* @var $model Elected */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'elected-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
	
	<?php
		// retrieve all MPs
		$criteria = new CDbCriteria;
		$criteria->order = 'mp_id ASC';
		$mps = Mps::model()->findAll($criteria);
		/*$criteria->order = array(
                'attributes'=>array(
                    'parent_search'=>array(
                        'asc'=>'person.name ASC'
				)));*/
		$data['mps'] = CHtml::listData($mps, 'mp_id', 'person.name');
		
		// retrieve all parliament cycles
		$criteria = new CDbCriteria;
		$parliament_cycles = ParliamentCycles::model()->findAll($criteria);
		//print_r($parliament_cycles);
		$data['parliament_cycles'] = CHtml::listData($parliament_cycles, 'parliament_cycle_id', 'title');
		//print_r($data['parliament_cycles']);
		?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'mp_id'); ?>
		<?php echo $form->dropDownList($model,'mp_id', $data['mps'], array('prompt'=>Yii::t('app','Select MP'))); ?>
		<?php echo $form->error($model,'mp_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parliament_cycle_id'); ?>
		<?php echo $form->dropDownList($model,'parliament_cycle_id', $data['parliament_cycles'], array('prompt'=>Yii::t('app','Select Parliament cycle'))); ?>
		<?php echo $form->error($model,'parliament_cycle_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'constituency'); ?>
		<?php echo $form->textField($model,'constituency',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'constituency'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'independence_timestamp'); ?>
		<?php echo $form->textField($model,'independence_timestamp'); ?>
		<?php echo $form->error($model,'independence_timestamp'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('app','Create') : Yii::t('app','Save')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->