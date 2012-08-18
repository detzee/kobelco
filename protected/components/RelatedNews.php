<?php
class RelatedNews extends CWidget {
	
	public $posts = array();
	
	public function init() {
		$this->posts = News::model()->recently(5)->findAll();
	}
	
	public function run() {		
		$this->render('relatednews');
	}
}