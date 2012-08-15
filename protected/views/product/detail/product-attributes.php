<?php
$attributeLabels = $product->attributeLabels();
$attributes = array('product_discharge_volume','product_pressure','product_voltage','product_power');
?>
<ul class="product-attributes">
	<li class="product-attribute">
		<?php foreach($attributes as $attribute) :?>
			<span class="attribute-label"><?php echo $attributeLabels[$attribute]?></span>
			<span class="attribute-value"><?php echo $product->$attribute?></span>
		<?php endforeach?>
	</li>
</ul>