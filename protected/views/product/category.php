<div class="product-list-wrapper">
	<div class="col-left">
			<div class="categories">
				<div class="title" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/Product-select-section_03.png" /></div>
				<?php $this->widget('application.components.CategoriesMenu')?>
			</div>
			<?php include "list/category-filter.php"?>
	</div>
	<div class="product-list-content">
		<div class="product-title"><?php echo $category->category_name?></div>
		<ul class="list-product">
			<?php foreach($products as $product) :?>
			<li class="product_item">
				<div class="images-holder">
					<a href="<?php echo CHtml::normalizeUrl(array('product/line', 'name' => $product->product_line)); ?>" style="width: 200px;height: 200px;padding: 0;background: none;margin: 0 auto;">
						<img src="<?php echo Yii::app()->request->baseUrl.'/images/products_line/'.str_replace(" ","-",strtolower($product->product_line)) ?>.png" />
					</a>
				</div><!-- .image-holder -->
				<?php /**?>
				<div class="product-attributes-holder">
					<?php include "list/product-attributes.php"?>
				</div>	
				**/?>	
				<h3 class="product-name"><?php echo $product->product_line?></h3>		
			</li>
			<?php endforeach; ?>
		</ul> <!-- list-product -->
	</div>
</div>
