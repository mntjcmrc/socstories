<?php
/* @var $this FollowingController */
/* @var $model Following */

$this->breadcrumbs=array(
	'Followings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Following', 'url'=>array('index')),
	array('label'=>'Create Following', 'url'=>array('create')),
	array('label'=>'Update Following', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Following', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Following', 'url'=>array('admin')),
);
?>

<h1>View Following #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'user.user_id',
		'following0.user_id',
	),
)); ?>
