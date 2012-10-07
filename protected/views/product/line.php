<?php Yii::app()->getClientScript()->registerCssFile(Yii::app()->request->baseUrl.'/css/bootstrap.css'); ?>
<div class="product-list-wrapper">
	<div class="col-left">
			<div class="categories">
				<div class="title" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/Product-select-section_03.png" /></div>
				<?php $this->widget('application.components.CategoriesMenu')?>
			</div>
			<?php include "list/filter.php"?>
	</div>
	<div class="product-list-content">
		<div class="product-title"><?php echo $line?></div>
		<ul class="list-product">
			<?php foreach($products as $product) :?>
			<li class="product_item">
				<div class="images-holder"><a href="<?php echo CHtml::normalizeUrl(array('product/detail', 'product' => $product->product_id)); ?>" style="width: 200px;height: 200px;padding: 0;background: none;margin: 0 auto;"><img src="<?php echo Yii::app()->request->baseUrl.'/images/products_line/'.str_replace(" ","-",strtolower($product->product_line)) ?>.png" /></a></div>
				<div class="product-attributes-holder">
					<?php include "list/product-attributes.php"?>
				</div>				
			</li>
			<?php endforeach; ?>
		</ul> <!-- list-product -->
		<div class="pagination">
			<?php $this->widget('CLinkPager', array(
			    'pages' => $pages,
			)) ?>
		</div>
	</div>
</div>
