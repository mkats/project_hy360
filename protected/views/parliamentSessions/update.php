<?php
/* @var $this ParliamentSessionsController */
/* @var $model ParliamentSessions */

$this->breadcrumbs=array(
	'Parliament Sessions'=>array('index'),
	$model->parliament_session_id=>array('view','id'=>$model->parliament_session_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ParliamentSessions', 'url'=>array('index')),
	array('label'=>'Create ParliamentSessions', 'url'=>array('create')),
	array('label'=>'View ParliamentSessions', 'url'=>array('view', 'id'=>$model->parliament_session_id)),
	array('label'=>'Manage ParliamentSessions', 'url'=>array('admin')),
);
?>

<h1>Update ParliamentSessions <?php echo $model->parliament_session_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>