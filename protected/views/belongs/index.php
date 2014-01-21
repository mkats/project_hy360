<?php
/* @var $this BelongsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Belongs',
);

$this->menu=array(
	array('label'=>'Create Belongs', 'url'=>array('create')),
	array('label'=>'Manage Belongs', 'url'=>array('admin')),
);
?>

<h1>Belongs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
