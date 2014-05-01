<?php
/* @var $this FollowingController */
/* @var $model Following */

$this->breadcrumbs=array(
	'Followings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Following', 'url'=>array('index')),
	array('label'=>'Manage Following', 'url'=>array('admin')),
);
?>

<h1>Create Following</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>