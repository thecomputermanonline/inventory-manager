<?php

/**
 * This is the model class for table "Suppliers".
 *
 * The followings are the available columns in table 'Suppliers':
 * @property string $Id
 * @property string $CompanyName
 * @property string $ContactName
 * @property string $ContactTitle
 * @property string $Address
 * @property string $City
 * @property string $Country
 * @property string $Phone
 * @property string $Fax
 * @property string $HomePage
 *
 * The followings are the available model relations:
 * @property Orders[] $orders
 * @property Products[] $products
 */
class Suppliers extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Suppliers';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CompanyName', 'required'),
			array('CompanyName', 'length', 'max'=>40),
			array('ContactName, ContactTitle', 'length', 'max'=>30),
			array('Address', 'length', 'max'=>60),
			array('City, Country', 'length', 'max'=>15),
			array('Phone, Fax', 'length', 'max'=>24),
			array('HomePage', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Id, CompanyName, ContactName, ContactTitle, Address, City, Country, Phone, Fax, HomePage', 'safe', 'on'=>'search'),
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
			'orders' => array(self::HAS_MANY, 'Orders', 'SupplierId'),
			'products' => array(self::HAS_MANY, 'Products', 'SupplierID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Id' => 'ID',
			'CompanyName' => 'Company Name',
			'ContactName' => 'Contact Name',
			'ContactTitle' => 'Contact Title',
			'Address' => 'Address',
			'City' => 'City',
			'Country' => 'Country',
			'Phone' => 'Phone',
			'Fax' => 'Fax',
			'HomePage' => 'Home Page',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('Id',$this->Id,true);
		$criteria->compare('CompanyName',$this->CompanyName,true);
		$criteria->compare('ContactName',$this->ContactName,true);
		$criteria->compare('ContactTitle',$this->ContactTitle,true);
		$criteria->compare('Address',$this->Address,true);
		$criteria->compare('City',$this->City,true);
		$criteria->compare('Country',$this->Country,true);
		$criteria->compare('Phone',$this->Phone,true);
		$criteria->compare('Fax',$this->Fax,true);
		$criteria->compare('HomePage',$this->HomePage,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Suppliers the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
