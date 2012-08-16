<?php 
$categoriesMenuItems = array();

$categories = Categories::model()->findAll();

foreach($categories as $_category) {
	$categoriesMenuItems[] = array('label'=>$_category->category_alias, 'url'=>array('product/list', 'category'=>$_category->category_id));
}




Yii::app()->getClientScript()->registerCssFile(Yii::app()->request->baseUrl.'/css/bootstrap.css');
Yii::app()->getClientScript()->registerScriptFile(Yii::app()->request->baseUrl.'/js/bootstrap.js');
$images = $product->product_picture;
$mainImage = array_shift($images);
$mainImage = is_object($mainImage)?$mainImage->image_file:Product::DEFAULT_IMAGE;
?>
<div id="product-detail-content">
	<div class="product-detail-top-content">
		<div class="col-left">
			<div class="categories">
				<div class="title" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/Product-select-section_03.png" /></div>
			<?php $this->widget('zii.widgets.CMenu',array('items'=> $categoriesMenuItems)); ?>
			</div>
		</div>
		<div class="col-right">
			<ul class="product-important-information">
				<li class="product-image">
				<img src="<?php echo Yii::app()->request->baseUrl . '/' . $mainImage?>" />
				</li>
				<li class="product-information">
		<div class="title"><h1><?php echo $product->product_name?></h1></div>				
					<div class="paragraph">
						<?php include "detail/product-attributes.php"?>
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
			
			<?php include "detail/tabs.php"?>
			
		</div><!--.col-right-->
		
	</div><!--.product-detail-top-content-->
		

		

</div><!-- #product-detail-content -->

