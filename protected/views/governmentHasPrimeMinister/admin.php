<?php
/* @var $this GovernmentHasPrimeMinisterController */
/* @var $model GovernmentHasPrimeMinister */

$this->breadcrumbs=array(
	'Government Has Prime Ministers'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List GovernmentHasPrimeMinister', 'url'=>array('index')),
	array('label'=>'Create GovernmentHasPrimeMinister', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#government-has-prime-minister-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Government Has Prime Ministers</h1>

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
	'id'=>'government-has-prime-minister-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'government_has_prime_minister_id',
		'government_id',
		'prime_minister_id',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
