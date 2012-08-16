<?php
$attributeLabels = $product->attributeLabels();
$attributes = array('product_discharge_volume','product_power');
?>
<ul class="product-attributes">
	<li class="product-attribute">
		<?php foreach($attributes as $attribute) :?>
			
			<div><span class="attribute-value" title="<?php echo $attributeLabels[$attribute]?>"><?php echo $product->$attribute?></span></div>
		<?php endforeach?>
<div class="detail"><?php echo CHtml::link('Detail', array('product/detail', 'product' => $product->product_id))?></div>
	</li>
</ul>
