<?php
/* @var $this AnsweredByController */
/* @var $model AnsweredBy */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'answered_by_id'); ?>
		<?php echo $form->textField($model,'answered_by_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'interpellation_id'); ?>
		<?php echo $form->textField($model,'interpellation_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'minister_id'); ?>
		<?php echo $form->textField($model,'minister_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'timestamp'); ?>
		<?php echo $form->textField($model,'timestamp'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'answer'); ?>
		<?php echo $form->textField($model,'answer',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->