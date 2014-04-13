<?php
/* @var $this StoriesController */
/* @var $model Stories */

$this->breadcrumbs=array(
	'Stories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Stories', 'url'=>array('index')),
	//array('label'=>'Manage Stories', 'url'=>array('admin')),
);
$menu_admin = array(
	array('label'=>'Manage Stories', 'url'=>array('admin')),
);
if(Yii::app()->user->isAdmin()){
	$this->menu = array_merge($this->menu, $menu_admin);
}
?>

<h1>Create Stories</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
