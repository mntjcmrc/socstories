<?php
/* @var $this MessagesController */
/* @var $data Messages */
?>

<div class="view">

	<?php
	$sender = Yii::app()->getModule('user')->user($data->author);
	$receiver = Yii::app()->getModule('user')->user($data->recipient);
	?>
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('subject')); ?>:</b>
	<?php echo CHtml::encode($data->subject); ?>
	<br />	
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('author')); ?>:</b>
	<?php echo CHtml::encode($sender->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recipient')); ?>:</b>
	<?php echo CHtml::encode($receiver->username); ?>
	<br />
	
	<?php echo CHtml::link(CHtml::encode('View'), array('view', 'id'=>$data->id)); ?>
	<br />

</div>
