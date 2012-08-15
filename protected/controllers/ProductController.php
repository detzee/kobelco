<?php

class ProductController extends Controller
{
	
	protected $categories = array();
	
	public function actionList()
	{
		$this->render('list');
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
		
		if(!$product->product_id) {
			$this->redirect(array('product/index'));
			exit;
		}

		$this->breadcrumbs = array(
			'Products' => array('product/index'),
			$product->product_name
		);
		
		$this->pageTitle = $product->product_name;
		$product->loadImages();
		//echo '<pre>';print_r($product);exit;
		$this->render('detail', array(
			'product' => $product
		));
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