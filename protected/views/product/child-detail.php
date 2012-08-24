<?php 
$parentId = $product->parent_id;
$childProducts = Product::model()->findAll(array(
	'condition'=> 'parent_id = :parentId ',
	'params' => array(':parentId' => $parentId)
));

$childProductMenu = array();

foreach($childProducts as $cProduct):
	$childProductMenu[] = array('label'=>$cProduct->product_name, 'url'=>array('product/detail', 'product'=>$cProduct->product_id));
endforeach;

?>
<div id="product-detail-content">
	<div class="product-detail-top-content">
		<div class="col-left">
			<div class="categories">				
			<?php $this->widget('zii.widgets.CMenu',array('items'=> $childProductMenu)); ?>
			</div>
		</div>
		<div class="col-right">
			<ul class="product-important-information">
				<li class="product-image">
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/<?php $product->product_picture; ?>" />
				</li>
				<li class="product-information">
		<div class="title"><h1><?php echo $product->product_name?></h1></div>				
					<div class="paragraph">
						<?php include "detail/product-attributes.php"?>
					</div>
				</li>
			</ul>
			
			<?php include "detail/tabs.php"?>
			
		</div><!--.col-right-->
		
	</div><!--.product-detail-top-content-->
		

		

</div><!-- #product-detail-content -->
