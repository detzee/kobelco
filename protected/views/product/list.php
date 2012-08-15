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
	'Products'=>$productIndex,
	$category->category_alias,
);

?>
<div class="product-list-wrapper">
	<div class="col-left">
			<div class="categories">
				<div class="title" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/Product-select-section_03.png" /></div>
				<?php $this->widget('zii.widgets.CMenu',array('items'=> $categoriesMenuItems)); ?>
			</div>
			<div class="filter_product">
				<div class="title"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/Product-select-section_16.png" /></div>
		
				<div class="power">
					<span>Power:</span>
					<ul class="Power:">
						<li><p>22 kW - 75 kW</p></li>
						<li><p>75 kW - 100 kW</p></li>
						<li><p>100 kW - 200 kW</p></li>
					</ul>
				</div>
			</div>
	</div>
	<div class="product-list-content">
		<div class="product-title"><?php echo $category->category_name?></div>
		<ul class="list-product">
			<?php foreach($products as $product) :?>
			<li>
				<div class="images-holder"><img src="<?php echo $product->product_picture ?>" /></div>
				<div class="product-attributes-holder">
					<?php include "detail/product-attributes.php"?>
				</div>
				<div class="detail"><?php echo CHtml::link('Detail', array('product/detail', 'product' => $product->product_id))?></div>
			</li>
			<?php endforeach; ?>
		</ul> <!-- list-product -->
	</div>
</div>