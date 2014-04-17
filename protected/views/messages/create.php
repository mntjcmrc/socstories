<?php
/* @var $this MessagesController */
/* @var $model Messages */

$this->breadcrumbs=array(
	'Messages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Messages', 'url'=>array('index')),
	//array('label'=>'Manage Messages', 'url'=>array('admin')),
);
$menu_admin = array(
	array('label'=>'Manage Stories', 'url'=>array('admin')),
);
if(Yii::app()->user->isAdmin()){
	$this->menu = array_merge($this->menu, $menu_admin);
}
?>

<h1>Create Messages</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
