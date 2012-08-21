<?php
class CategoriesProducts extends CWidget {
	
	public $categories  = null;
	
	public $products = array();
	
	public function init(){
		$this->categories = Categories::model()->findAll(array('limit' => 3));
		foreach($this->categories as $category) {
			$this->products[$category->category_id] = Product::model()
				->find(array(
					'condition' => 'category_id = :categoryId',
					'params' => array(':categoryId' => $category->category_id),
					'order' => 'RAND() DESC'
				));
		}
		
	}
	
	public function run() {
		$this->render('categoriesProducts');
	}
}