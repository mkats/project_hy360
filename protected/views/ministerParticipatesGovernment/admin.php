<?php
/* @var $this MinisterParticipatesGovernmentController */
/* @var $model MinisterParticipatesGovernment */

$this->breadcrumbs=array(
	'Minister Participates Governments'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List MinisterParticipatesGovernment', 'url'=>array('index')),
	array('label'=>'Create MinisterParticipatesGovernment', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#minister-participates-government-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Minister Participates Governments</h1>

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
	'id'=>'minister-participates-government-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'minister_participates_government_id',
		'minister_id',
		"minister.person.name",
		'government_id',
		'start_timestamp',
		'end_timestamp',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
