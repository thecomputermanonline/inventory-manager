<?php

class OrdersController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			//'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view', 'sendorder', 'lpo','getSupplierProducts'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionLpo($id)
	{
		$this->render('lpo',array(
			'model'=>$this->loadModel($id),
		));
	}
	
	
		public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$order=new Orders;
		$suppliers=Suppliers::model()->findAll(array('order'=>'CompanyName'));
		$supplierslist=CHtml::listData($suppliers, 'Id','CompanyName');
		
		
		 if(isset($_POST['Orders']))
			{	   
			$_POST['Orders']['OrderDate'] = date('Y-m-d'); //set order date
			$order->attributes=$_POST['Orders'];
			//print_r($_POST['OrderProducts']);
			if($order->save()) {
				$total = 0; //default order total
				
				#loop through selected order products and save them
				foreach ($_POST['OrderProducts'] as $data) {
					if(!empty($data['ProductId'])){ //check if productId is not empty
					$orderproduct= new OrderProducts; 
					$orderproduct->OrderId = $order->Id;
					$orderproduct->ProductId = $data['ProductId'];
					$orderproduct->Quantity = $data['Quantity'];
					$orderproduct->LineTotal = $this->_getAmount($data['ProductId']) * $data['Quantity']; //multiply unitPrice by quantity
					//$orderproduct->OrderId = $order->Id;
					$total += $orderproduct->LineTotal; //add up total
					
					//$orderproduct->attributes=$_POST['OrderProducts'];
					$orderproduct->save(); //save each orderProducts
					}
				}
				
				$order->TotalPrice = $total; //set final order total
				$order->save(); //update order to accomodate the total then redirect
				
				$this->redirect(array('lpo','id'=>$order->Id));
			
			}
		}

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		//if(isset($_POST['Orders']))
//		{
//			$model->attributes=$_POST['Orders'];
//			if($model->save())
//				$this->redirect(array('view','id'=>$model->Id));
//		}

		$this->render('sendorder',array(
			'model'=>$model ,'suppliers'=>$supplierslist
		));
	}
	
	    
	private function _getAmount($id){
		$prodcut=Products::model()->findByPk($id); //->UnitPrice
		//$amount = $prodcut->UnitPrice;
		$amount = $prodcut->PackPrice;
		return $amount;
	}
	

	public function actionGetSupplierProducts()
	{
		//$order= new Orders;
		//$orderproduct= new OrderProducts;
		$supplierdata=Suppliers::model()->findByPk((int) $_POST['Orders']['SupplierId]']);
					
		$productdata=Products::model()->bystatus()->findAll('SupplierID=:id', 
					  array(':id'=>(int) $_POST['Orders']['SupplierId']));
	
	 //$this->performAjaxValidation($orderproduct);
	 
	 //if(isset($_POST['OrderProducts']))
		//{
		
		//$this->redirect(array('index'));
		 // populate input data to $a and $b
       // $a->attributes=$_POST['Orders'];
        //$orderproduct->attributes=$_POST['OrderProducts'];
 
        // validate BOTH $a and $b
        //$valid=$b->validate();
        //$valid=$b->validate() && $valid;
 //if($orderproduct->save())
				//$this->redirect(array('view','id'=>$orderproduct->Id));
        /*if($valid)
        {
            // use false parameter to disable validation
            //$a->save(false);
            $b->save(false);
           $this->redirect(array('index'));
        }*/
		
		
		//}
		//else{ echo('na wao');}
		//$data=CHtml::listData($data,'Id','ProductName');
		
		$this->renderPartial('_supplier_products',array(
			'product'=>$productdata , 'supplierdata'=>$supplierdata
		));
	}
	
	
	
	public function actionDynamiccities()
	{
		$data=Products::model()->findAll('SupplierID=:parent_id', 
					  array(':parent_id'=>(int) $_POST['country_id']));
	 
		$data=CHtml::listData($data,'Id','ProductName');
		foreach($data as $value=>$name)
		{
			echo CHtml::tag('option',
					   array('value'=>$value),CHtml::encode($name),true);
		}
	}
	
	

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Orders']))
		{
			$model->attributes=$_POST['Orders'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->Id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Orders');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Orders('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Orders']))
			$model->attributes=$_GET['Orders'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Orders::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='orders-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
