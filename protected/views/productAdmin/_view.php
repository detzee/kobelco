<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->product_id), array('view', 'id'=>$data->product_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_id')); ?>:</b>
	<?php echo CHtml::encode($data->category_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_name')); ?>:</b>
	<?php echo CHtml::encode($data->product_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_voltage')); ?>:</b>
	<?php echo CHtml::encode($data->product_voltage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_pressure')); ?>:</b>
	<?php echo CHtml::encode($data->product_pressure); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_discharge_volume')); ?>:</b>
	<?php echo CHtml::encode($data->product_discharge_volume); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_power')); ?>:</b>
	<?php echo CHtml::encode($data->product_power); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('product_specification')); ?>:</b>
	<?php echo CHtml::encode($data->product_specification); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_picture')); ?>:</b>
	<?php echo CHtml::encode($data->product_picture); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_download')); ?>:</b>
	<?php echo CHtml::encode($data->product_download); ?>
	<br />

	*/ ?>

</div>