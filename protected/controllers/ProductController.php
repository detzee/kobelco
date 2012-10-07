<?php

class ProductController extends Controller
{
	
	protected $categories = array();
	
	public function actionCategory()
	{	
		$productIndex = array('product/index');
		
		$categoryId = Yii::app()->request->getQuery('id');
		
		if(!$categoryId) {
			$this->redirect($productIndex);
			return;
		}
		
		$category = Categories::model()->findByPk($categoryId);
		
		$criteria = new CDbCriteria;
		
		$criteria->condition = "category_id=:categoryId";
		$criteria->params = array(":categoryId" => $categoryId);
		$criteria->group = 'product_line';
		
		$products = ProductIndex::model()->findAll($criteria);
		
		$this->breadcrumbs=array(
			'Products'=>$productIndex,
			$category->category_alias,
		);
		$this->render('category', array(			
			'category' => $category,
			'products' => $products,
		));
	}
	
	public function actionLine()
	{	
		$productIndex = array('product/index');
		
		$line = Yii::app()->request->getQuery('name');
		
		if(!$line) {
			$this->redirect($productIndex);
			return;
		}
	
		//$category = Categories::model()->findByPk($line);
		
		$criteria = new CDbCriteria;
		
		$criteria->condition = "product_line=:line";
		$criteria->params = array(":line" => $line);
		
		$count = ProductIndex::model()->count($criteria);
		$pages = new CPagination($count);
		
		$pages->pageSize = 10;
		$pages->applyLimit($criteria);
		
		
		$products = ProductIndex::model()->findAll($criteria);
		
		$this->pageTitle = $line;
		
		$this->breadcrumbs=array(
			'Products'=>$productIndex,
			$line,
		);
		$this->render('line', array(			
			'line' => $line,
			'products' => $products,
			'pages' => $pages
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

		$product = ProductIndex::model()->findByPk($productId);
		
		if(!is_object($product)) {
			$this->redirect(array('product/index'));
			return;
		}
	
		
		
		$categoryId = $product->category_id;
		
		
		$category = Categories::model()->findByPk($categoryId);
		
		$this->breadcrumbs = array(
			Yii::t('site', 'Products') => array('product/index'),
			$category->category_alias => array('product/category', 'id' => $category->category_id)
		);
		
		
		
		$this->breadcrumbs[] = $product->product_line . ' ' . $product->model;
		
		$this->pageTitle = $product->product_line . ' ' . $product->model;
		//$product->loadImages();
		//echo '<pre>';print_r($product);exit;
		
		
		$viewFile = 'child-detail';
		
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