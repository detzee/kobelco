<?php

class ProductController extends Controller
{
	
	protected $categories = array();
	
	public function actionList()
	{	
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
		$this->render('list', array(			
			'category' => $category,
			'products' => $products,
		));
	}

	public function actionIndex()
	{		
		$categories = Yii::app()->db->createCommand("SELECT * FROM categories")->queryAll();
		$this->render('index', array(
			'categories' => $categories
		));
	}
	
	public function actionDetail() 
	{
		$productId = Yii::app()->request->getQuery('product');
		
		if(!$productId) {
			$this->redirect(array('product/index'));
			exit;
		}

		$product = Product::model()->findByPk($productId);
		
		if(!is_object($product)) {
			$this->redirect(array('product/index'));
			return;
		}
	
		
		if($product->parent_id == 0){
			$categoryId = $product->category_id;
		}else{
			$parentProduct = Product::model()->findByPk($product->parent_id);
			$categoryId = $parentProduct->category_id; 
		}
		
		$category = Categories::model()->findByPk($categoryId);
		
		$this->breadcrumbs = array(
			Yii::t('site', 'Products') => array('product/index'),
			$category->category_alias => array('product/list', 'category' => $category->category_id)
		);
		
		if(isset($parentProduct)) {
			$this->breadcrumbs[$parentProduct->product_name] = array('product/detail', 'product' => $parentProduct->product_id);
		}
		
		$this->breadcrumbs[] = $product->product_name;
		
		$this->pageTitle = $product->product_name;
		$product->loadImages();
		//echo '<pre>';print_r($product);exit;
		if($product->parent_id == 0){
			$viewFile = 'detail';
		}else{
			$viewFile = 'child-detail';
		}
		$this->render($viewFile, array(
			'product' => $product
		));
	}
	
	public function actionSearch() {
		if(!$q = Yii::app()->request->getQuery('q')) {
			$this->render('404');
			return;
		}	
		$match = addcslashes($q, '%_'); // escape LIKE's special characters
		$condition = new CDbCriteria( array(
		    'condition' => "product_name LIKE :match",         // no quotes around :match
		    'params'    => array(':match' => "%$match%")  // Aha! Wildcards go here
		) );
		$products = Product::model()->findAll($condition);
		$category = new stdClass; 
		$category->category_name = Yii::t('site', 'Search result(s) for \'{q}\'', array('{q}' => $q));
		
		$this->breadcrumbs=array(			
			$category->category_name
		);
		
		
		if(count($products)) {
			$this->render('list', array(
				'category' => $category,
				'products' => $products,
			));
		}else{
			$this->render('404');
		}
		
		
	}

	// -----------------------------------------------------------
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}