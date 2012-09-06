<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('attribute_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->attribute_id), array('view', 'id'=>$data->attribute_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('attribute_code')); ?>:</b>
	<?php echo CHtml::encode($data->attribute_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('attribute_label')); ?>:</b>
	<?php echo CHtml::encode($data->attribute_label); ?>
	<br />


</div>