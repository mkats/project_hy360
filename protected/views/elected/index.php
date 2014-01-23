<?php
/* @var $this ElectedController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	Yii::t('app','Electeds'),
);

$this->menu=array(
	array('label'=>Yii::t('app','Create Elected'), 'url'=>array('create')),
	array('label'=>Yii::t('app','Manage Elected'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app','Electeds') ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
