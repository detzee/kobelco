<?php
class ImportProductForm extends CFormModel {
	
	public $uploadFolder = 'upload/import';
	
    public $csv;
    
    public function __construct(){
    	$this->uploadFolder = Yii::app()->basePath . DIRECTORY_SEPARATOR . $this->uploadFolder;
    }
 
    public function rules() {
        return array(
            array('csv', 'file', 'types' => 'csv'),
        );
    }
    
    /**
     * Generate a prefix to make filename unique
     * @return string
     */
    public function getPrefixFilename() {
    	return time() . "_";
    }
}