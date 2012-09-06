<?php

/**
 * This is the model class for table "product_index".
 *
 * The followings are the available columns in table 'product_index':
 * @property integer $product_id
 * @property string $model
 * @property string $product_line
 * @property integer $category_id
 * @property integer $discharge_air_volume
 * @property integer $pressure
 * @property integer $power
 * @property string $product_starting
 * @property string $voltage
 * @property string $cooling_system
 * @property integer $dimension_l
 * @property integer $dimension_w
 * @property integer $dimension_h
 * @property integer $weight
 * @property integer $noise
 * @property integer $discharge_pipe
 * @property integer $lubrication_oil
 * @property string $download
 * @property string $brand
 * @property string $capacity
 * @property string $working_pressure
 * @property string $phrase
 */
class ProductIndex extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ProductIndex the static model class
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
		return 'product_index';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('category_id, discharge_air_volume, pressure, power, dimension_l, dimension_w, dimension_h, weight, noise, discharge_pipe, lubrication_oil', 'numerical', 'integerOnly'=>true),
			array('model, product_line, product_starting, voltage, cooling_system, download, brand, capacity, working_pressure, phrase', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('product_id, model, product_line, category_id, discharge_air_volume, pressure, power, product_starting, voltage, cooling_system, dimension_l, dimension_w, dimension_h, weight, noise, discharge_pipe, lubrication_oil, download, brand, capacity, working_pressure, phrase', 'safe', 'on'=>'search'),
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
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'product_id' => 'Product',
			'model' => 'Model',
			'product_line' => 'Product Line',
			'category_id' => 'Category',
			'discharge_air_volume' => 'Discharge Air Volume',
			'pressure' => 'Pressure',
			'power' => 'Power',
			'product_starting' => 'Product Starting',
			'voltage' => 'Voltage',
			'cooling_system' => 'Cooling System',
			'dimension_l' => 'Dimension L',
			'dimension_w' => 'Dimension W',
			'dimension_h' => 'Dimension H',
			'weight' => 'Weight',
			'noise' => 'Noise',
			'discharge_pipe' => 'Discharge Pipe',
			'lubrication_oil' => 'Lubrication Oil',
			'download' => 'Download',
			'brand' => 'Brand',
			'capacity' => 'Capacity',
			'working_pressure' => 'Working Pressure',
			'phrase' => 'Phrase',
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
		$criteria->compare('model',$this->model,true);
		$criteria->compare('product_line',$this->product_line,true);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('discharge_air_volume',$this->discharge_air_volume);
		$criteria->compare('pressure',$this->pressure);
		$criteria->compare('power',$this->power);
		$criteria->compare('product_starting',$this->product_starting,true);
		$criteria->compare('voltage',$this->voltage,true);
		$criteria->compare('cooling_system',$this->cooling_system,true);
		$criteria->compare('dimension_l',$this->dimension_l);
		$criteria->compare('dimension_w',$this->dimension_w);
		$criteria->compare('dimension_h',$this->dimension_h);
		$criteria->compare('weight',$this->weight);
		$criteria->compare('noise',$this->noise);
		$criteria->compare('discharge_pipe',$this->discharge_pipe);
		$criteria->compare('lubrication_oil',$this->lubrication_oil);
		$criteria->compare('download',$this->download,true);
		$criteria->compare('brand',$this->brand,true);
		$criteria->compare('capacity',$this->capacity,true);
		$criteria->compare('working_pressure',$this->working_pressure,true);
		$criteria->compare('phrase',$this->phrase,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}