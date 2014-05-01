<?php
/* @var $this StoriesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Stories',
);

$this->menu=array(
	array('label'=>'Create Stories', 'url'=>array('create'), 'visible'=>!Yii::app()->user->isGuest),
	array('label'=>'Manage Stories', 'url'=>array('admin'),'visible'=>Yii::app()->user->isAdmin()),
);
?>

<h1>Stories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
