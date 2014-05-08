<?php
/* @var $this MessagesController */
/* @var $data Messages */
?>

<div class="view">
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('subject')); ?>:</b>
	<?php echo CHtml::encode($data->subject); ?>
	<br />	
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('author')); ?>:</b>
	<?php echo CHtml::encode($data->author0->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recipient')); ?>:</b>
	<?php echo CHtml::encode($data->recipient0->username); ?>
	<br />
	
	<?php echo CHtml::link(CHtml::encode('View'), array('view', 'id'=>$data->id)); ?>
	<br />
	
	<hr></hr>

</div>
