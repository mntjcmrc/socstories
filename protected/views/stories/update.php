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
	//array('label'=>'Manage Stories', 'url'=>array('admin')),
);
$menu_admin = array(
	array('label'=>'Manage Stories', 'url'=>array('admin')),
);
if(Yii::app()->user->isAdmin()){
	$this->menu = array_merge($this->menu, $menu_admin);
}
?>

<h1>Update Stories <?php echo $model->id; ?></h1>

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
