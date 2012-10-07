<?php
class CategoriesMenu extends CWidget {
	public $categories = array();
	
	public function init(){
		$categoriesMenuItems = array();
	
		$categories = Categories::model()->findAll();
		
		foreach($categories as $_category) {
			$categoriesMenuItems[] = array('label'=>$_category->category_alias, 'url'=>array('product/category', 'id'=>$_category->category_id));
		}
		
		$this->categories = $categoriesMenuItems;
	}
	
	public function run() {
		$this->render('categoriesMenu');
	}
}