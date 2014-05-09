<?php
/* @var $this CommentsController */
/* @var $model Comments */

$this->breadcrumbs=array(
	'Comments'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Comments', 'url'=>array('index'), 'visible'=>Yii::app()->user->isAdmin()),
	array('label'=>'View Comments', 'url'=>array('view', 'id'=>$model->id), 'visible'=>Yii::app()->user->isAdmin()),
	array('label'=>'Manage Comments', 'url'=>array('admin'), 'visible'=>Yii::app()->user->isAdmin()),
);
?>

<h1>Update Comments from <?php echo $model->author0->username; ?> on story <?php echo $model->story0->title; ?></h1>

<?php 
$render = false;
if(Yii::app()->user->isAdmin()){
	$render = true;
} else if(Yii::app()->user->getId() === $model->author){
	$render = true;
}
if($render){
$this->renderPartial('_form', array('model'=>$model));
} else {
throw new CHttpException(403, "You are not authorized to perform that.");
}
?>
