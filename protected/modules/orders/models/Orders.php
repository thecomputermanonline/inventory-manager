<?php

/**
 * This is the model class for table "Orders".
 *
 * The followings are the available columns in table 'Orders':
 * @property integer $Id
 * @property string $SupplierId
 * @property string $TotalPrice
 * @property string $OrderDate
 * @property integer $OrderStatus
 * @property integer $CreatedBy
 * @property integer $ModifiedBy
 * @property string $CreatedOn
 * @property string $ModifiedOn
 *
 * The followings are the available model relations:
 * @property OrderProducts[] $orderProducts
 * @property Suppliers $supplier
 */
class Orders extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Orders';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('SupplierId, OrderDate, CreatedBy, ModifiedBy', 'required'),
			array('OrderStatus, CreatedBy, ModifiedBy', 'numerical', 'integerOnly'=>true),
			array('SupplierId', 'length', 'max'=>11),
			array('TotalPrice', 'length', 'max'=>10),
			array('CreatedOn, ModifiedOn', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Id, SupplierId, TotalPrice, OrderDate, OrderStatus, CreatedBy, ModifiedBy, CreatedOn, ModifiedOn', 'safe', 'on'=>'search'),
		);
	}
	
	public function scopes() {
    return array(
        'bystatus' => array('order' => 'ProductName'),
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
			'orderProducts' => array(self::HAS_MANY, 'OrderProducts', 'OrderId'),
			'supplier' => array(self::BELONGS_TO, 'Suppliers', 'SupplierId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Id' => 'OrderID',
			'SupplierId' => 'Supplier',
			'TotalPrice' => 'Order Amount',
			'OrderDate' => 'Order Date',
			'OrderStatus' => 'Order Status',
			'CreatedBy' => 'Created By',
			'ModifiedBy' => 'Modified By',
			'CreatedOn' => 'Created On',
			'ModifiedOn' => 'Modified On',
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

		$criteria->compare('Id',$this->Id);
		$criteria->compare('SupplierId',$this->SupplierId,true);
		$criteria->compare('TotalPrice',$this->TotalPrice,true);
		$criteria->compare('OrderDate',$this->OrderDate,true);
		$criteria->compare('OrderStatus',$this->OrderStatus);
		$criteria->compare('CreatedBy',$this->CreatedBy);
		$criteria->compare('ModifiedBy',$this->ModifiedBy);
		$criteria->compare('CreatedOn',$this->CreatedOn,true);
		$criteria->compare('ModifiedOn',$this->ModifiedOn,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Orders the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
