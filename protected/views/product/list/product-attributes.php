<?php
$attributeLabels = $product->attributeLabels();
$attributes = array('model','discharge_air_volume','power');
?>
<ul class="product-attributes">
	<li class="product-attribute">
		<?php foreach($attributes as $attribute) :?>
			
			<div style="text-align:left; padding-left:30px">
				<span class="attribute-label"><?php echo ucfirst(str_replace("_"," ",$attributeLabels[$attribute]))?></span>: 
				<span class="attribute-value" title="<?php echo $attributeLabels[$attribute]?>"><?php echo $product->$attribute?></span></div>
		<?php endforeach?>
<?php /**?>

<div class="detail"><?php echo CHtml::link('Detail', array('product/detail', 'product' => $product->product_id))?></div>
<?php **/ ?>
	</li>
</ul>
