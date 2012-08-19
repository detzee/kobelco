<?php

/**
 * This is the model class for table "products".
 *
 * The followings are the available columns in table 'products':
 * @property integer $product_id
 * @property integer $category_id
 * @property string $product_name
 * @property string $product_voltage
 * @property string $product_pressure
 * @property string $product_discharge_volume
 * @property string $product_power
 * @property string $product_specification
 * @property string $product_picture
 * @property string $product_download
 * @property array $images
 */
class Product extends CActiveRecord
{
	
	const DEFAULT_IMAGE = 'images/default.png';
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Product the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'products';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('category_id, product_name, product_voltage, product_pressure, product_discharge_volume, product_power, product_specification, product_picture, product_download', 'required'),
			array('category_id', 'numerical', 'integerOnly'=>true),
			array('product_name, product_voltage, product_power, product_picture, product_download', 'length', 'max'=>255),
			array('product_pressure', 'length', 'max'=>12),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('product_id, category_id, product_name, product_voltage, product_pressure, product_discharge_volume, product_power, product_specification, product_picture, product_download', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}
	
	/**
	 * Load all images of this product to model
	 * @return Product
	 */
	public function loadImages() {
		if(!$this->product_id) return $this;
		$images = ProductImage::model()->findAll("product_id=:productId", array(":productId" => $this->product_id));
		if(count($images)) {
			array_unshift($images, $this->product_picture);
			$this->product_picture = $images;
		}
		return $this;
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'product_id' => 'Product',
			'category_id' => 'Category',
			'product_name' => 'Product Name',
			'product_voltage' => 'Product Voltage',
			'product_pressure' => 'Product Pressure',
			'product_discharge_volume' => 'Product Discharge Volume',
			'product_power' => 'Product Power',
			'product_specification' => 'Product Specification',
			'product_picture' => 'Product Picture',
			'product_download' => 'Product Download',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('product_id',$this->product_id);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('product_name',$this->product_name,true);
		$criteria->compare('product_voltage',$this->product_voltage,true);
		$criteria->compare('product_pressure',$this->product_pressure,true);
		$criteria->compare('product_discharge_volume',$this->product_discharge_volume,true);
		$criteria->compare('product_power',$this->product_power,true);
		$criteria->compare('product_specification',$this->product_specification,true);
		$criteria->compare('product_picture',$this->product_picture,true);
		$criteria->compare('product_download',$this->product_download,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}