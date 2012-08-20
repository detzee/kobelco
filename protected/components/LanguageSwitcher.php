<?php
class LanguageSwitcher extends CWidget {
	
	public $languages = array();
	
	public function init() {		
		$this->languages = Yii::app()->params['languages'];
	}
	
	public function run() {		
		$this->render('languageswitcher');
	}
}