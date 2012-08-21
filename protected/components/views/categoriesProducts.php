<ul class="categories-products-list" id="random-product-in-category">
	<?php foreach($this->categories as $category):$product = $this->products[$category->category_id]?>
	<li class="product-box">
		<h3 class="category-name">
			<a href="<?php echo CHtml::normalizeUrl(array('product/list', 'category' => $category->category_id))?>">
				<?php echo $category->category_name?>
			</a>
		</h3>
		<div class="col-left">			
			<?php /**?><img alt="<?php echo $product->product_name?>" src="<?php echo Yii::app()->request->baseUrl . '/' . $product->product_logo?>" /> **/?>
			<p class="product-name"><?php echo $product->product_name?></p>
			<p><?php echo $product->product_power?></p>
			<p><?php echo $product->product_discharge_volume?></p>
		</div>
		<div class="col-right">
			<img alt="<?php echo $product->product_name?>" src="<?php echo Yii::app()->request->baseUrl . '/' . $product->product_picture?>" width="128" />
		</div>
		<?php /**?>
		<div class="text">
			<a href="<?php echo CHtml::normalizeUrl(array('product/detail', 'product' => 7))?>" class="viewmore"><?php echo Yii::t('site', 'View more')?></a>	
		</div>
		**/?>
	</li>
	<?php endforeach?>
</ul>