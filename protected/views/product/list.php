<?php

$categoriesMenuItems = array();

$categories = Categories::model()->findAll();

foreach($categories as $_category) {
	$categoriesMenuItems[] = array('label'=>$_category->category_alias, 'url'=>array('product/list', 'category'=>$_category->category_id));
}

$productIndex = array('product/index');

$categoryId = Yii::app()->request->getQuery('category');

if(!$categoryId) {
	$this->redirect($productIndex);
	return;
}

$category = Categories::model()->findByPk($categoryId);

$products = Product::model()->findAll("category_id=:categoryId", array(":categoryId" => $categoryId));

$this->breadcrumbs=array(
	Yii::t('site', 'Products')=>$productIndex,
	$category->category_alias,
);

?>
<div class="product-list-wrapper">
	<div class="col-left">
			<div class="categories">
				<div class="title" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/Product-select-section_03.png" /></div>
				<?php $this->widget('zii.widgets.CMenu',array('items'=> $categoriesMenuItems)); ?>
			</div>
			<?php include "list/filter.php"?>
	</div>
	<div class="product-list-content">
		<div class="product-title"><?php echo $category->category_name?></div>
		<ul class="list-product">
			<?php foreach($products as $product) :?>
			<li class="product_item">
				<div class="images-holder"><a href="<?php echo CHtml::normalizeUrl(array('product/detail', 'product' => $product->product_id)); ?>" style="width: 200px;height: 200px;padding: 0;background: none;margin: 0 auto;"><img src="<?php echo Yii::app()->request->baseUrl.'/'.$product->product_picture ?>" /></a></div>
				<div class="product-attributes-holder">
					<?php include "list/product-attributes.php"?>
				</div>
				
			</li>
			<?php endforeach; ?>
		</ul> <!-- list-product -->
	</div>
</div>
