<?php 
/**
 * This importer will do all thing that import data form csv to database
 * Import attributes
 * Import products
 */

class Product_Importer {
	
	protected $_csvHeaders = array();
	
	protected $_csvData = array();
	
	protected $_attributes = array();
	
	protected $_successAttributes = 0;
	
	public function __construct($headers, $content) {
		$this->_csvHeaders = $headers;
		$this->_csvData = $content;
	}
	
	/**
	 * Import attributes from csv to database
	 * @return Product_Importer
	 */
	public function importAttributes(){		
		
		foreach($this->_csvHeaders as $header) {
			$find = Attribute::model()->find(array('condition' => "attribute_code = '$header'"));
			if(count($find)) continue;
			$model = new Attribute;
			$data = array(
				'attribute_code' => $header,
				'attribute_label' => $this->getAttributeName($header)
			);
			$model->attributes = $data;
			if($model->save()) $this->_successAttributes++;
		}
		
		if($this->_successAttributes) echo $this->_successAttributes . " attributes imported.<br/>";
	}
	
	/**
	 * Create table product_index in database to store all value of products
	 * @return unknown_type
	 */
	public function createProductIndexTable(){
		$sql = array();
		$sql[] = "DROP TABLE IF EXISTS product_index;";
		$sql[] = "CREATE TABLE product_index (";
		$sql[] = "product_id INT(11) PRIMARY KEY AUTO_INCREMENT,";
		$sql[] = $this->getAttributeFields();
		$sql[] = ");";
		
		$sql = implode("\n", $sql);
		$command = Yii::app()->db->createCommand($sql);
		$row = $command->execute();
		echo $row;
	}
	
	/**
	 * Generate columns as mysql format
	 * @return string
	 */
	public function getAttributeFields() {
		$columnsName = $this->_csvHeaders;
		$exampleData = $this->_csvData[0];
		
		$sql = array();
		
		foreach($columnsName as $key => $value) {
			$sqlString = "";
			$sqlString.= $value . " ";
			$sqlString.= is_numeric($exampleData[$key])?"INT(11)":"VARCHAR(255)";
			$sql[] = $sqlString;
		}
		
		return implode(",\n", $sql);
	}
	
	public function importData() {
		$results = 0;
		$columns = implode(",", $this->_csvHeaders);
		foreach($this->_csvData as $rowIndex => $data) {
			foreach($data as $key => $_data) {
				$data[$key] = is_numeric($_data)?$_data:"'$_data'";
			}
			$value = implode(",", $data);
			
			$sql = "INSERT INTO product_index ($columns) VALUES ($value)";
			$command = Yii::app()->db->createCommand($sql);
			if(count($command->execute())) {
				$results++;
			}
			
			
		}
		
		echo $results . " products imported.";
	}
	
	/**
	 * Transform code to label. Example: attribute_code to Attribute code
	 * @param string $code
	 * @return string
	 */
	public function getAttributeName($code) {
		return ucfirst(str_replace('_',' ',$code));
	}
	
}
?>