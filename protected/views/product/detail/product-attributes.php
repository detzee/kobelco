<?php
$attributeLabels = $product->attributeLabels();
$attributes = array(
	'discharge_air_volume' => 'm3/min',
	'pressure' => 'bar',
	'voltage' => 'V/50hz, 3Phase',
	'power' => 'KW'
);
?>
<table class="table product-attributes">
	
		<?php foreach($attributes as $attribute => $unit) :?>
		<tr class="product-attribute">
			<td width="150"><span class="attribute-label"><?php echo $attributeLabels[$attribute]?></span></td>
			
			<td><span class="attribute-value"><?php echo $product->$attribute?> (<?php echo $unit?>)</span></td>
		
		</tr>
		<?php endforeach?>
	
</table>
