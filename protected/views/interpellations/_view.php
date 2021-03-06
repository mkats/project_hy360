<?php
/* @var $this InterpellationsController */
/* @var $data Interpellations */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('interpellation_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->interpellation_id), array('view', 'id'=>$data->interpellation_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category')); ?>:</b>
	<?php echo CHtml::encode($data->category); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parliament_session_id')); ?>:</b>
	<?php echo CHtml::encode($data->parliament_session_id); ?>
	<br />

	<b><?php echo CHtml::encode('Parliament session date' /*$data->getAttributeLabel('parliamentSession.timestamp')*/); ?>:</b>
	<?php echo CHtml::link(/*$data->parliamentSession->parliamentCycle->title.', on '.*/ $data->parliamentSession->timestamp, $this->createAbsoluteUrl('parliamentSessions/view', array('id'=>$data->parliament_session_id))) ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mp_id')); ?>:</b>
	<?php echo CHtml::encode($data->mp_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mp.person.name')); ?>:</b>
	<?php echo CHtml::link($data->mp->person->name, $this->createAbsoluteUrl('mps/view', array('id'=>$data->mp_id))) ?>
	<br />

</div>