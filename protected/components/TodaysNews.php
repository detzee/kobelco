<?php
class TodaysNews extends CWidget {
	
	public $posts = array();
	
	public function init() {
		$this->posts = News::model()->recently(3)->findAll();
	}
	
	public function run() {		
		$this->render('todaysnews');
	}
}