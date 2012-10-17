<?php
class CategoriesProducts extends CWidget {
	
	public $categories  = null;
	
	public $products = array();
	
	public function init(){
		$this->categories = Categories::model()->findAll(array('limit' => '2'));
		foreach($this->categories as $category) {
			$productLine = array('KOBELION II VS','KOBELION VX','KOBELION II SG','KOBELION II AG','Emeraude FE','Emeraude ALE');
			$criteria = new CDbCriteria;
			$criteria->compare('category_id', $category->category_id);
			$criteria->addInCondition('product_line', $productLine);
			$criteria->order = "RAND() DESC";
			$this->products[$category->category_id] = ProductIndex::model()
				->find($criteria);
		}
		
	}
	
	public function run() {
		$this->render('categoriesProducts');
	}
}