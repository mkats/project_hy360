<?php
/* @var $this ParticipateController */
/* @var $model Participate */

$this->breadcrumbs=array(
	'Participates'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Participate', 'url'=>array('index')),
	array('label'=>'Create Participate', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#participate-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Participates</h1>

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
	'id'=>'participate-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'participate_id',
		'party_id',
		"party.name",
		'parliament_cycle_id',
		"parliamentCycle.title",
		'electoral_percentage',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
