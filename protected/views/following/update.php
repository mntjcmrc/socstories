<?php
/* @var $this FollowingController */
/* @var $model Following */

$this->breadcrumbs=array(
	'Followings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Following', 'url'=>array('index')),
	array('label'=>'Create Following', 'url'=>array('create')),
	array('label'=>'View Following', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Following', 'url'=>array('admin')),
);
?>

<h1>Update Following <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>