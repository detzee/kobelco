<?php 
$productName = $product->product_line . ' ' . $product->model;
$categoriesMenuItems = array();

$categories = Categories::model()->findAll();

foreach($categories as $_category) {
	$categoriesMenuItems[] = array('label'=>$_category->category_alias, 'url'=>array('product/list', 'category'=>$_category->category_id));
}

Yii::app()->getClientScript()->registerCssFile(Yii::app()->request->baseUrl.'/css/jquery.lightbox-0.5.css');
Yii::app()->getClientScript()->registerCssFile(Yii::app()->request->baseUrl.'/css/bootstrap.css');
Yii::app()->getClientScript()->registerScriptFile(Yii::app()->request->baseUrl.'/js/bootstrap.js');
Yii::app()->getClientScript()->registerScriptFile(Yii::app()->request->baseUrl . '/js/jquery.lightbox-0.5.js');
$images = Yii::app()->request->baseUrl.'/images/products_line/'.str_replace(" ","-",strtolower($product->product_line)) . '.png';
if(is_array($images)) {
	$mainImage = array_shift($images);
	$mainImage = is_object($mainImage)?$mainImage->image_file:$mainImage;
}else if(is_string($images)){
	$mainImage = $images;
	$images = array();
}else{
	$mainImage = Product::DEFAULT_IMAGE;
	$images = array();
}
?>


<div id="product-detail-content">
	<div class="product-detail-top-content">
		<div class="col-left">
			<div class="categories">				
				<div class="title" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/Product-select-section_03.png" /></div>
				<?php $this->widget('application.components.CategoriesMenu')?>
			</div>
		</div>
		<div class="col-right">
			<ul class="product-important-information">
				<li class="product-image">
				<img src="<?php echo $mainImage; ?>" />
				</li>
				<li class="product-information">
					<div class="title"><h1><?php echo $productName?></h1></div>				
					<div class="paragraph">
						<?php include "detail/product-attributes.php"?>
						<p class="description">Mô tả:</p>
					</div>
				</li>
			</ul>
			
			<?php include "detail/tabs.php"?>
			
		</div><!--.col-right-->
		
	</div><!--.product-detail-top-content-->
		

		

</div><!-- #product-detail-content -->
