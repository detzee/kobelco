<?php
$attributeLabels = $product->attributeLabels();
$attributes = array(
	'model' => '',
	'discharge_air_volume' => 'm3/min',
	'pressure' => 'bar',
	'voltage' => 'V/50hz, 3Phase',
	'power' => 'KW',
	'product_starting|Starting' => '',
	'cooling_system' => '',
	'dimension_l' => 'mm',
	'dimension_w' => 'mm',
	'dimension_h' => 'mm',
	'weight' => 'kg',
	'noise' => 'dB',
	'discharge_pipe' => 'A',
	'lubrication_oil' => 'lit'
	
);
?>
<table class="table product-attributes">
	
		<?php foreach($attributes as $attribute => $unit) :?>
		<tr class="product-attribute">
			<?php unset($label);?>
			<?php if(strrpos($attribute,"|")):?>
				<?php 
				$tmp = explode("|", $attribute);
				$attribute = $tmp[0];
				$label = $tmp[1];
				?>
			<?php endif?>
			<td width="150"><span class="attribute-label"><?php echo isset($label)?$label:$attributeLabels[$attribute]?></span></td>
			
			<td><span class="attribute-value"><?php echo $product->$attribute?> <?php echo $unit?"($unit)":""?></span></td>
		
		</tr>
		<?php endforeach?>
	
</table>