<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->category_id), array('view', 'id'=>$data->category_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_name')); ?>:</b>
	<?php echo CHtml::encode($data->category_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_image')); ?>:</b>
	<?php echo CHtml::encode($data->category_image); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_alias')); ?>:</b>
	<?php echo CHtml::encode($data->category_alias); ?>
	<br />


</div>