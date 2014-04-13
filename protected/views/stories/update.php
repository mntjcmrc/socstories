<?php
/* @var $this StoriesController */
/* @var $model Stories */

$this->breadcrumbs=array(
	'Stories'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Stories', 'url'=>array('index')),
	array('label'=>'Create Stories', 'url'=>array('create')),
	array('label'=>'View Stories', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Stories', 'url'=>array('admin')),
);
?>

<h1>Update Stories <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>