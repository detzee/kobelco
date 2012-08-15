<?php 
Yii::app()->getClientScript()->registerCssFile(Yii::app()->request->baseUrl.'/css/bootstrap.css');
Yii::app()->getClientScript()->registerScriptFile(Yii::app()->request->baseUrl.'/js/bootstrap.js');
$images = $product->product_picture;
$mainImage = array_shift($images);
$mainImage = is_object($mainImage)?$mainImage->image_file:Product::DEFAULT_IMAGE;
?>
<div id="product-detail-content">
	<div class="title"><?php echo $product->product_name?></div>
	<div class="product-detail-top-content">
		<ul class="product-important-information">
			<li class="product-image">
				<img src="<?php echo Yii::app()->request->baseUrl . '/' . $mainImage?>" />
			</li>
			<li class="product-information">				
				<div class="paragraph">
					<?php include "detail/product-attributes.php"?>
				</div>
			</li>
		</ul>
		<?php if(count($images)):?>
		<div class="list-thumbs">
			<ul class="list-thumb">
				<?php foreach($images as $image):?>
					<li class="item"><img src="<?php echo $image->image_file?>" /></li>
				<?php endforeach?>
			</ul>
		</div>
		<?php endif;//count images?>
	</div>
	<div class="product-detail-bottom-content">
		<?php include "detail/tabs.php"?>
	</div>
</div><!-- #product-detail-content -->

