<?php
/* @var $this MessagesController */
/* @var $model Messages */

$this->breadcrumbs=array(
	'Messages'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Messages', 'url'=>array('index'), 'visible'=>!Yii::app()->user->isGuest),
	array('label'=>'Create Messages', 'url'=>array('create'), 'visible'=>!Yii::app()->user->isGuest),
	array('label'=>'View Messages', 'url'=>array('view', 'id'=>$model->id), 'visible'=>!Yii::app()->user->isGuest),
	
);
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
