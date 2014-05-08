<?php
/* @var $this CommentsController */
/* @var $data Comments */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('author')); ?>:</b>
	<?php echo CHtml::encode($data->author0->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('story')); ?>:</b>
	<?php echo CHtml::encode($data->story0->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('text')); ?>:</b>
	<?php echo CHtml::encode($data->text); ?>
	<br />
	
	<?php echo CHtml::link(CHtml::encode('View'), array('view', 'id'=>$data->id)); ?>
	<br />
	
	<hr></hr>


</div>