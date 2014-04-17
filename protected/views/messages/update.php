<?php
/* @var $this MessagesController */
/* @var $model Messages */

$this->breadcrumbs=array(
	'Messages'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Messages', 'url'=>array('index')),
	array('label'=>'Create Messages', 'url'=>array('create')),
	array('label'=>'View Messages', 'url'=>array('view', 'id'=>$model->id)),
	//array('label'=>'Manage Messages', 'url'=>array('admin')),
);
$menu_admin = array(
	array('label'=>'Manage Stories', 'url'=>array('admin')),
);
if(Yii::app()->user->isAdmin()){
	$this->menu = array_merge($this->menu, $menu_admin);
}
?>

<h1>Update Messages <?php echo $model->id; ?></h1>

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
