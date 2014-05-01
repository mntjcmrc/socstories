<?php
/* @var $this StoriesController */
/* @var $model Stories */

$this->breadcrumbs=array(
	'Stories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Stories', 'url'=>array('index'), 'visible'=>!Yii::app()->user->isGuest),
	array('label'=>'Manage Stories', 'url'=>array('admin'), 'visible'=>Yii::app()->user->isAdmin()),
);
?>

<h1>Create Stories</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
