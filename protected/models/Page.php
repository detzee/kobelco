<?php

/**
 * This is the model class for table "pages".
 *
 * The followings are the available columns in table 'pages':
 * @property integer $page_id
 * @property string $name
 * @property string $alias
 * @property string $content
 * @property string $meta_title
 * @property string $meta_description
 * @property string $meta_keyword
 * @property string $language
 * @property string $SKU
 */
class Page extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Page the static model class
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
		return 'pages';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, alias, content, meta_title, meta_description, meta_keyword, SKU', 'required'),
			array('name, alias, meta_title, meta_keyword, SKU', 'length', 'max'=>255),
			array('language', 'length', 'max'=>2),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('page_id, name, alias, content, meta_title, meta_description, meta_keyword, language, SKU', 'safe', 'on'=>'search'),
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
			'page_id' => 'Page',
			'name' => 'Name',
			'alias' => 'Alias',
			'content' => 'Content',
			'meta_title' => 'Meta Title',
			'meta_description' => 'Meta Description',
			'meta_keyword' => 'Meta Keyword',
			'language' => 'Language',
			'SKU' => 'Sku',
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

		$criteria->compare('page_id',$this->page_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('alias',$this->alias,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('meta_title',$this->meta_title,true);
		$criteria->compare('meta_description',$this->meta_description,true);
		$criteria->compare('meta_keyword',$this->meta_keyword,true);
		$criteria->compare('language',$this->language,true);
		$criteria->compare('SKU',$this->SKU,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}