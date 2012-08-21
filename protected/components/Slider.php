<?php
class Slider extends CWidget {
	
	public $images = array();
	
	public function init() {
		$this->images = array(
			array('path' => '/images/slider/banner1.png','caption' => ''),
			array('path' => '/images/slider/banner2.png','caption' => ''),
			array('path' => '/images/slider/banner3.png','caption' => ''),
			array('path' => '/images/slider/banner4.png','caption' => ''),
		);
	}
	
	public function run() {		
		if(!count($this->images)) return;
		Yii::app()->getClientScript()->registerCssFile(Yii::app()->request->baseUrl . '/css/basic-jquery-slider.css');
		Yii::app()->getClientScript()->registerScriptFile(Yii::app()->request->baseUrl . '/js/basic-jquery-slider.js');
		$this->render('slider');
	}
}