<?php
/* @var $this FollowingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Followings',
);

$this->menu=array(
	array('label'=>'Create Following', 'url'=>array('create')),
	array('label'=>'Manage Following', 'url'=>array('admin')),
);
?>

<h1>Followings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
