<?php

/**
 * This is the model class for table "OrderProducts".
 *
 * The followings are the available columns in table 'OrderProducts':
 * @property integer $id
 * @property integer $OrderId
 * @property string $ProductId
 * @property integer $Quantity
 * @property string $LineTotal
 * @property integer $CreatedBy
 * @property integer $ModifiedBy
 * @property string $CreatedOn
 * @property string $ModifiedOn
 *
 * The followings are the available model relations:
 * @property Products $product
 * @property Orders $order
 */
class OrderProducts extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'OrderProducts';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('OrderId, ProductId, LineTotal, CreatedBy, ModifiedBy', 'required'),
			array('OrderId, Quantity, CreatedBy, ModifiedBy', 'numerical', 'integerOnly'=>true),
			array('ProductId', 'length', 'max'=>11),
			array('LineTotal', 'length', 'max'=>10),
			array('CreatedOn, ModifiedOn', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, OrderId, ProductId, Quantity, LineTotal, CreatedBy, ModifiedBy, CreatedOn, ModifiedOn', 'safe', 'on'=>'search'),
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
			'product' => array(self::BELONGS_TO, 'Products', 'ProductId'),
			'order' => array(self::BELONGS_TO, 'Orders', 'OrderId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'OrderId' => 'Order',
			'ProductId' => 'Product',
			'Quantity' => '',
			'LineTotal' => 'Line Total',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('OrderId',$this->OrderId);
		$criteria->compare('ProductId',$this->ProductId,true);
		$criteria->compare('Quantity',$this->Quantity);
		$criteria->compare('LineTotal',$this->LineTotal,true);
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
	 * @return OrderProducts the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
