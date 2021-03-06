<?php
class CategoriesTest extends CDbTestCase {
	public function testCRUD() {
		$categories = new Categories;
		$categories->setAttributes(array(
			'category_name' => 'Test Category',
			'category_image' => 'test.png',
			'category_alias' => 'Category Alias'
		));
		
		$this->assertTrue($categories->save(false));
	}
}
