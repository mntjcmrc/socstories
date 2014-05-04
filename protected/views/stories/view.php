<?php
/* @var $this StoriesController */
/* @var $model Stories */

$this->breadcrumbs=array(
	'Stories'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Stories', 'url'=>array('index'), 'visible'=>!Yii::app()->user->isGuest),
	array('label'=>'Create Stories', 'url'=>array('create'), 'visible'=>!Yii::app()->user->isGuest),
	array('label'=>'Update Stories', 'url'=>array('update', 'id'=>$model->id), 'visible'=>!Yii::app()->user->isGuest),
	array('label'=>'Delete Stories', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'),'visible'=>Yii::app()->user->isAdmin()),
	array('label'=>'Manage Stories', 'url'=>array('admin'), 'visible'=>Yii::app()->user->isAdmin()),
);
?>

<h1><?php echo $model->title; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(
			'label' => 'Author',
			'value' => $model->author0->username,
		),
		'text',
	),
)); ?>
<h2>Comments</h2>
<?php
foreach (array_reverse($model->comments) as $comment){
	$this->widget('zii.widgets.CDetailView', array(
		'data'=>$comment,
		'attributes'=>array(
			array(
				'label' => 'Author',
				'value' => $comment->author0->username,
			),
			'text',
		),
	));
	?>
	<br />
	<?php
}
$this->widget('CommentsWidget', array(
	'storyID' => $model->id,
));
?>
