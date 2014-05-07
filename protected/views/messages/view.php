<?php
/* @var $this MessagesController */
/* @var $model Messages */

$this->breadcrumbs=array(
	'Messages'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Messages', 'url'=>array('index'), 'visible'=>!Yii::app()->user->isGuest),
	array('label'=>'Create Messages', 'url'=>array('create'), 'visible'=>!Yii::app()->user->isGuest),
	array('label'=>'Update Messages', 'url'=>array('update', 'id'=>$model->id), 'visible'=>!Yii::app()->user->isGuest),
	array('label'=>'Delete Messages', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'), 'visible'=>Yii::app()->user->isAdmin()),
	array('label'=>'Manage Messages', 'url'=>array('admin'), 'visible'=>Yii::app()->user->isAdmin()),
);
?>

<h1>View Messages</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'author',
		'recipient',
		'subject',
		'text',
	),
)); ?>
