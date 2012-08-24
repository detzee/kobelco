<?php 
$categoriesMenuItems = array();

$categories = Categories::model()->findAll();

foreach($categories as $_category) {
	$categoriesMenuItems[] = array('label'=>$_category->category_alias, 'url'=>array('product/list', 'category'=>$_category->category_id));
}

Yii::app()->getClientScript()->registerCssFile(Yii::app()->request->baseUrl.'/css/jquery.lightbox-0.5.css');
Yii::app()->getClientScript()->registerCssFile(Yii::app()->request->baseUrl.'/css/bootstrap.css');
Yii::app()->getClientScript()->registerScriptFile(Yii::app()->request->baseUrl.'/js/bootstrap.js');
Yii::app()->getClientScript()->registerScriptFile(Yii::app()->request->baseUrl . '/js/jquery.lightbox-0.5.js');
$images = $product->product_picture;
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

$childProducts = Product::model()->findAll(array(
	'condition' => 'parent_id = :parent_id',
	'params' => array(':parent_id' => $product->product_id)
));
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
					<?php foreach($childProducts as $cProduct):?>
					<li class="item">
						<a href="<?php echo CHtml::normalizeUrl(array('product/detail', 'product'=>$cProduct->product_id)) ?>">
							<img src="<?php echo Yii::app()->request->baseUrl ?>/<?php echo $cProduct->product_picture ?>" width="78" height="78"/>
						</a>
					</li>
					<?php endforeach?>
				</ul>
			</div>
			
			<?php include "detail/tabs.php"?>
			
		</div><!--.col-right-->
		
	</div><!--.product-detail-top-content-->
		

		

</div><!-- #product-detail-content -->



