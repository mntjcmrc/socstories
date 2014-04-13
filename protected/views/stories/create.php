<?php
/* @var $this StoriesController */
/* @var $model Stories */

$this->breadcrumbs=array(
	'Stories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Stories', 'url'=>array('index')),
	array('label'=>'Manage Stories', 'url'=>array('admin')),
);
?>

<h1>Create a story</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
