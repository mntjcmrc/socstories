<?php
/* @var $this MessagesController */
/* @var $model Messages */

$this->breadcrumbs=array(
	'Messages'=>array('index'),
	$model->subject,
);

$this->menu=array(
	array('label'=>'List Messages', 'url'=>array('index'), 'visible'=>!Yii::app()->user->isGuest),
	array('label'=>'Create Messages', 'url'=>array('create'), 'visible'=>!Yii::app()->user->isGuest),
	array('label'=>'Delete Messages', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'), 'visible'=>Yii::app()->user->isOwner($model->author)),
	
);
?>

<h1>View Messages</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(
			'label' => 'From',
			'value' => $model->author0->username,
		),
		array(
			'label' => 'To',
			'value' => $model->recipient0->username,
		),
		'subject',
		'text',
	),
)); ?>
