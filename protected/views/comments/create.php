<?php
/* @var $this CommentsController */
/* @var $model Comments */

$this->breadcrumbs=array(
	'Comments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Comments', 'url'=>array('index'), 'visible'=>Yii::app()->user->isAdmin()),
	array('label'=>'Manage Comments', 'url'=>array('admin'), 'visible'=>Yii::app()->user->isAdmin()),
);
?>

<h1>Create Comments</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
