<?php
/* @var $this AnsweredByController */
/* @var $model AnsweredBy */

$this->breadcrumbs=array(
	'Answered Bies'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List AnsweredBy', 'url'=>array('index')),
	array('label'=>'Create AnsweredBy', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#answered-by-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Answered Bies</h1>

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
	'id'=>'answered-by-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'answered_by_id',
		'interpellation_id',
		"interpellation.description",
		'minister_id',
		"minister.person.name",
		'timestamp',
		'answer',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
