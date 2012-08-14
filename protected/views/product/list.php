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

$products = Product::model()->findAll();			

$this->breadcrumbs=array(
	'Products'=>$productIndex,
	$category->category_alias,
);

?>
<div class="product-detail-content">
	<div class="col-left">
			<div class="menu">
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/Product-select-section_03.png" class="title" />
				<?php $this->widget('zii.widgets.CMenu',array('items'=> $categoriesMenuItems)); ?>
			</div>
	</div>
</div>