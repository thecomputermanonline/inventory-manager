<?php

/**
 * This is the model class for table "Products".
 *
 * The followings are the available columns in table 'Products':
 * @property string $Id
 * @property integer $ProductSKU
 * @property string $ProductName
 * @property string $ProductDescription
 * @property string $SupplierID
 * @property string $ProductCategoryId
 * @property integer $UnitsPerCarton
 * @property string $UnitPrice
 * @property integer $Discontinued
 *
 * The followings are the available model relations:
 * @property OrderProducts[] $orderProducts
 * @property Productcategories $productCategory
 * @property Suppliers $supplier
 */
class Products extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Products';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
		array('ProductSKU, ProductName', 'unique', 'message' => "This products name or sku  already exists."),
			array('ProductSKU, ProductName, SupplierID, ProductCategoryId', 'required'),
			array('ProductSKU, UnitsPerCarton, Discontinued', 'numerical', 'integerOnly'=>true),
			array('ProductName', 'length', 'max'=>40),
			array('SupplierID, ProductCategoryId', 'length', 'max'=>11),
			array('UnitPrice', 'length', 'max'=>10),
			array('ProductDescription', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Id, ProductSKU, ProductName, ProductDescription, SupplierID, ProductCategoryId, UnitsPerCarton, UnitPrice, Discontinued', 'safe', 'on'=>'search'),
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
			'orderProducts' => array(self::HAS_MANY, 'OrderProducts', 'ProductId'),
			'productCategory' => array(self::BELONGS_TO, 'Productcategories', 'ProductCategoryId'),
			'supplier' => array(self::BELONGS_TO, 'Suppliers', 'SupplierID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Id' => 'ID',
			'ProductSKU' => 'Product Sku',
			'ProductName' => 'Product Name',
			'ProductDescription' => 'Product Description',
			'SupplierID' => 'Supplier',
			'ProductCategoryId' => 'Product Category',
			'UnitsPerCarton' => 'Units Per Carton',
			'UnitPrice' => 'Unit Price (=N=)',
			'Discontinued' => 'Discontinue this product',
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
		$criteria->compare('ProductSKU',$this->ProductSKU);
		$criteria->compare('ProductName',$this->ProductName,true);
		$criteria->compare('ProductDescription',$this->ProductDescription,true);
		$criteria->compare('SupplierID',$this->SupplierID,true);
		$criteria->compare('ProductCategoryId',$this->ProductCategoryId,true);
		$criteria->compare('UnitsPerCarton',$this->UnitsPerCarton);
		$criteria->compare('UnitPrice',$this->UnitPrice,true);
		$criteria->compare('Discontinued',$this->Discontinued);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Products the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
