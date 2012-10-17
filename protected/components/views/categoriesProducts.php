<ul class="categories-products-list" id="random-product-in-category">
	<?php foreach($this->categories as $category):$product = $this->products[$category->category_id];if(!is_object($product)) continue;?>
	
	<li class="product-box">
		<h3 class="category-name">
			<a href="<?php echo CHtml::normalizeUrl(array('product/list', 'category' => $category->category_id))?>">
				<?php echo $category->category_name?>
			</a>
		</h3>
		<div class="col-left">			
			<?php /**?><img alt="<?php echo $product->product_name?>" src="<?php echo Yii::app()->request->baseUrl . '/' . $product->product_logo?>" /> **/?>
			<p class="product-name"><?php echo $product->product_line . " " . $product->model?></p>
			<p>Power: <?php echo $product->power?> (KW)</p>
			<p>Discharge Air Volume: <?php echo $product->discharge_air_volume?> (m3/min)</p>
		</div>
		<div class="col-right">
			<a href="<?php echo CHtml::normalizeUrl(array('product/detail', 'product' => $product->product_id))?>">
			<img alt="<?php echo $product->product_line?>" src="<?php echo Yii::app()->request->baseUrl . '/images/products_line/' . str_replace(" ","-",strtolower($product->product_line))?>" width="128" />
			</a>
		</div>
		<?php /**?>
		<div class="text">
			<a href="<?php echo CHtml::normalizeUrl(array('product/detail', 'product' => 7))?>" class="viewmore"><?php echo Yii::t('site', 'View more')?></a>	
		</div>
		**/?>
	</li>
	<?php endforeach?>
</ul>