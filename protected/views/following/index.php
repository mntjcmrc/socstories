<?php
/* @var $this FollowingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Followings',
);

$this->menu=array(
	array('label'=>'Create Following', 'url'=>array('create'), 'visible'=>!Yii::app()->user->isGuest),
	array('label'=>'Manage Following', 'url'=>array('admin'), 'visible'=>Yii::app()->user->isAdmin()),
);
?>

<h1>Followings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
