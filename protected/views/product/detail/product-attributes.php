<?php
$attributeLabels = $product->attributeLabels();
$attributes = array('product_discharge_volume','product_pressure','product_voltage','product_power');
?>
<ul class="product-attributes">
	<li class="product-attribute">
		<?php foreach($attributes as $attribute) :?>
			<div class="eachrows" style="font-size: 13px;">
			<span class="attribute-label"><?php echo $attributeLabels[$attribute].':'?></span>
			<span class="attribute-value"><?php echo $product->$attribute?></span>
			</div>
		<?php endforeach?>
	</li>
</ul>
