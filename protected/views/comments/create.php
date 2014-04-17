<?php
/* @var $this CommentsController */
/* @var $model Comments */

$this->breadcrumbs=array(
	'Comments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Comments', 'url'=>array('index')),
	//array('label'=>'Manage Comments', 'url'=>array('admin')),
);
$menu_admin = array(
	array('label'=>'Manage Stories', 'url'=>array('admin')),
);
if(Yii::app()->user->isAdmin()){
	$this->menu = array_merge($this->menu, $menu_admin);
}
?>

<h1>Create Comments</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
