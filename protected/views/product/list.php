<?php
$productIndex = array('product/index');

$categoryId = Yii::app()->request->getQuery('category');

if(!$categoryId) {
	$this->redirect($productIndex);
	return;
}

$category = Categories::model()->findByPk($categoryId);

$products = Product::model()->findAll();

echo '<pre>';print_r($products);exit;
			

$this->breadcrumbs=array(
	'Products'=>$productIndex,
	$category->category_alias,
);?>

