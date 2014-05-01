<?php
/* @var $this FollowingController */
/* @var $model Following */

$this->breadcrumbs=array(
	'Followings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Following', 'url'=>array('index'), 'visible'=>!Yii::app()->user->isGuest),
	array('label'=>'Manage Following', 'url'=>array('admin'), 'visible'=>Yii::app()->user->isAdmin()),
);
?>

<h1>Create Following</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>