<?php
/* @var $this MessagesController */
/* @var $model Messages */

$this->breadcrumbs=array(
	'Messages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Messages', 'url'=>array('index'), 'visible'=>!Yii::app()->user->isGuest),
	
);
?>

<h1>Create Messages</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
