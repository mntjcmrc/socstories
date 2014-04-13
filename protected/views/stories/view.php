<?php
/* @var $this StoriesController */
/* @var $model Stories */

$this->breadcrumbs=array(
	'Stories'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Stories', 'url'=>array('index')),
	array('label'=>'Create Stories', 'url'=>array('create')),
	array('label'=>'Update Stories', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Stories', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Stories', 'url'=>array('admin')),
);
?>

<h1>View Stories #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'author',
		'text',
	),
)); ?>
