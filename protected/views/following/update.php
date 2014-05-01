<?php
/* @var $this FollowingController */
/* @var $model Following */

$this->breadcrumbs=array(
	'Followings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Following', 'url'=>array('index'), 'visible'=>!Yii::app()->user->isGuest),
	array('label'=>'Create Following', 'url'=>array('create'), 'visible'=>!Yii::app()->user->isGuest),
	array('label'=>'View Following', 'url'=>array('view', 'id'=>$model->id), 'visible'=>!Yii::app()->user->isGuest),
	array('label'=>'Manage Following', 'url'=>array('admin'), 'visible'=>Yii::app()->user->isAdmin()),
);
?>

<h1>Update Following <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>