<?php
class Slider extends CWidget {
	
	public $images = array();
	
	public function init() {
		$this->images = array(
			array('path' => '/images/slider/AG.jpg','caption' => ''),
			array('path' => '/images/slider/Ale.jpg','caption' => ''),
			array('path' => '/images/slider/VSSerial.jpg','caption' => ''),
			array('path' => '/images/slider/XG.jpg','caption' => ''),
			array('path' => '/images/slider/Economild.jpg','caption' => ''),
		);
	}
	
	public function run() {		
		if(!count($this->images)) return;
		Yii::app()->getClientScript()->registerCssFile(Yii::app()->request->baseUrl . '/css/basic-jquery-slider.css');
		Yii::app()->getClientScript()->registerScriptFile(Yii::app()->request->baseUrl . '/js/basic-jquery-slider.js');
		$this->render('slider');
	}
}