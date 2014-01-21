<?php
/* @var $this PortfoliosController */
/* @var $model Portfolios */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'portfolio_id'); ?>
		<?php echo $form->textField($model,'portfolio_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subject'); ?>
		<?php echo $form->textField($model,'subject',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'start_timestamp'); ?>
		<?php echo $form->textField($model,'start_timestamp'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'end_timestamp'); ?>
		<?php echo $form->textField($model,'end_timestamp'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'minister_id'); ?>
		<?php echo $form->textField($model,'minister_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->