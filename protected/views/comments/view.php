<?php
/* @var $this CommentsController */
/* @var $model Comments */

$this->breadcrumbs=array(
	'Comments'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Comments', 'url'=>array('index'), 'visible'=>!Yii::app()->user->isGuest),
	array('label'=>'Create Comments', 'url'=>array('create'), 'visible'=>!Yii::app()->user->isGuest),
	array('label'=>'Update Comments', 'url'=>array('update', 'id'=>$model->id), 'visible'=>!Yii::app()->user->isGuest),
	array('label'=>'Delete Comments', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'), 'visible'=>Yii::app()->user->isAdmin()),
	array('label'=>'Manage Comments', 'url'=>array('admin'), 'visible'=>Yii::app()->user->isAdmin()),
);
?>

<h1>View Comments #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'author',
		'story',
		'text',
	),
)); ?>
