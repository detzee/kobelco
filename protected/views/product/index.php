<?php
$this->breadcrumbs=array(
	Yii::t('site', 'Products'),
);

?>

<div class="list-sp" id="main-categories">
	<ul>
	<?php foreach($categories as $category) : ?>
	<li onclick="document.location.href='<?php echo CHtml::normalizeUrl(array('product/list', 'category' => $category['category_id']))?>'">
		<div class="col-left">			
			<h3 class="category-name"><?php echo $category['category_name']?></h3>
		</div>
		<div class="col-right">
			<img alt="<?php echo $category['category_alias']?>" src="<?php echo Yii::app()->request->baseUrl . '/' . $category['category_image']?>" />
		</div>		
	</li>
	<?php endforeach?>
</ul>
</div>

