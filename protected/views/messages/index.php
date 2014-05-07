<?php
/* @var $this MessagesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Messages',
);

$this->menu=array(
	array('label'=>'Create Messages', 'url'=>array('create'), 'visible'=>!Yii::app()->user->isGuest),
	array('label'=>'Manage Messages', 'url'=>array('admin'), 'visible'=>Yii::app()->user->isAdmin()),
);
?>

<h1>Messages</h1>

<?php 

	$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
));?>
