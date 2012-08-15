<?php 
$attributeLabels = $product->attributeLabels();
$attributes = array('product_discharge_volume','product_pressure','product_voltage','product_power');
$images = $product->product_picture;
$mainImage = array_shift($images);
?>
<div id="product-detail-content">
	<div class="title"><?php echo $product->product_name?></div>
	<div class="product-detail-top-content">
		<ul class="product-important-information">
			<li class="product-image">
				<img src="<?php echo Yii::app()->request->baseUrl . '/' . $mainImage->image_file?>" />
			</li>
			<li class="product-information">				
				<div class="paragraph">
					<ul class="product-attributes">
						<li class="product-attribute">
							<?php foreach($attributes as $attribute) :?>
								<span class="attribute-label"><?php echo $attributeLabels[$attribute]?></span>
								<span class="attribute-value"><?php echo $product->$attribute?></span>
							<?php endforeach?>
						</li>
					</ul>
				</div>
			</li>
		</ul>
		
		<div class="list-thumbs">
			<ul class="list-thumb">
				<?php foreach($images as $image):?>
					<li class="item"><img src="<?php echo $image->image_file?>" /></li>
				<?php endforeach?>
			</ul>
		</div>
	</div>
	<div class="product-detail-bottom-content">
		<p><?php echo $product->product_specification?></p>
	</div>
</div><!-- #product-detail-content -->

