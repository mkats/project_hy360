<?php
/* @var $this QueryController */
/* @var $dataProvider ext.SDataProvider */

$this->breadcrumbs=array(
	'Query',
);
?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>