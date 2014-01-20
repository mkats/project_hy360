<?php
/* @var $this BelongsController */
/* @var $model Belongs */

$this->breadcrumbs=array(
	'Belongs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Belongs', 'url'=>array('index')),
	array('label'=>'Create Belongs', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#belongs-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Belongs</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'belongs-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'belongs_id',
		'mp_id',
		'party_id',
		'start_timestamp',
		'end_timestamp',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>