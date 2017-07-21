

<?php /*?>


<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'suppliers-form',
	'enableAjaxValidation'=>false,
	'enableClientValidation'=>true,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'CompanyName',array('class'=>'span4','maxlength'=>40)); ?>

	<?php echo $form->textFieldRow($model,'ContactName',array('class'=>'span4','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'ContactTitle',array('class'=>'span4','maxlength'=>30)); ?>

	<?php echo $form->textFieldRow($model,'Address',array('class'=>'span4','maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($model,'City',array('class'=>'span4','maxlength'=>15)); ?>

	<?php echo $form->textFieldRow($model,'Country',array('class'=>'span4','maxlength'=>15)); ?>

	<?php echo $form->textFieldRow($model,'Phone',array('class'=>'span4','maxlength'=>24)); ?>

	<?php echo $form->textFieldRow($model,'Fax',array('class'=>'span4','maxlength'=>24)); ?>

	<?php echo $form->textFieldRow($model,'HomePage',array('class'=>'span4','maxlength'=>255)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
                        'size'=>'large',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?><?php */?>

<?php /*$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'orders-form',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
));*/ ?>
 	<?php //echo $form->errorSummary($model); ?>
    
    <table class="table table-bordered">
  <thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">ProductSKU</th>
     <th scope="col">ProductName</th>
      <th scope="col">size</th>
    <th scope="col">UnitPrice</th>
    <th scope="col">Units per Pack</th>
      <th scope="col">PackPrice</th>
    <th scope="col">Qty</th>
    
  </tr>
  </thead>
  <tbody>
  <?php if(!empty($product)): ?>
  <?php for($i = 0; $i < count($product); $i++): ?>
  <tr>
    <td><?php echo CHtml::checkBox('OrderProducts['.$i.'][ProductId]', FALSE, array('value' => $product[$i]['Id'])); ?></td>
     <td><?php echo  $product[$i]['ProductSKU']; ?></td>
    <td><?php echo  $product[$i]['ProductName']; ?></td>
      <td><?php echo  $product[$i]['size']; ?></td>
     <td><?php echo  $product[$i]['UnitPrice']; ?></td>
       <td><?php echo  $product[$i]['UnitsPerCarton']; ?></td>
         <td><?php echo  $product[$i]['PackPrice']; ?></td>
    <td><?php echo CHtml::textField('OrderProducts['.$i.'][Quantity]', '', array('class'=>'span1','maxlength'=>10)); ?></td>
     <!--<td><?php /*echo $form->hiddenField($orderproduct,'LineTotal', '', array('class'=>'span1','maxlength'=>40));*/ ?></td>-->
   

  </tr>
  <?php endfor; ?>
  <?php /*?>  <tr><td colspan="5" style="text-align:right">Subtotal</td>
  
  <td>
  <?php echo $form->textFieldRow($order,'TotalPrice',array('class'=>'span1','maxlength'=>40)); ?></td>
  </tr> <tr><td colspan="5" style="text-align:right">Tax</td>
  
  <td>
  <?php echo $form->textFieldRow($order,'TotalPrice',array('class'=>'span1','maxlength'=>40)); ?></td>
  </tr><?php */?>
  <!--<tr><td colspan="4" style="text-align:right">TotalPrice</td>
  
  <td>
  <?php echo CHtml::textField('Order[TotalPrice]', '', array('class'=>'span1','maxlength'=>40, 'disabled'=>'disabled')); ?></td>
  </tr>-->
  
  <tr><td colspan="6">
  
  <div class="form-actions">
		<?php /*$this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
                        'size'=>'large',
			'label'=>$order->isNewRecord ? 'Create a new Order' : 'Save Order',
		));*/ ?>
        <?php echo CHtml::button('Create a new Order', array('class'=>'btn btn-primary btn-large', 'type'=>'submit')); ?>
	</div>
  
  </td></tr>
  <?php else: ?>
  <tr>
  	<td colspan="5">No Product(s) found for the selected Supplier, Try again please</td>
  </tr>
  <?php endif; ?>
  </tbody>
</table>


    
    <?php /*$this->endWidget();*/ ?>






    <?php /*?><?php echo CHtml::beginForm(); ?>
    
    <?php echo CHtml::errorSummary($order, $orderproduct); ?>

<table class="table table-bordered">
  <thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">Product SKU</th>
     <th scope="col">Product Name</th>
      <th scope="col">UnitPrice</th>
    <th scope="col">Quantity</th>
    <th scope="col">Line Total</th>
  </tr>
  </thead>
  <tbody>
  <?php for($i = 0; $i < count($product); $i++): ?>
  <tr>
    <td><?php echo CHtml::checkBox('OrderProducts.'.$i.'.ProductId', FALSE, array('value' => $product[$i]['Id'], )); ?></td>
     <td><?php echo  $product[$i]['ProductSKU']; ?></td>
    <td><?php echo  $product[$i]['ProductName']; ?></td>
     <td><?php echo  $product[$i]['UnitPrice']; ?></td>
    <td><?php echo CHtml::textField('Quantity'); ?></td>
    <td><?php echo Chtml::hiddenField('LineTotal'); ?></td>
  </tr>
  <?php endfor; ?>
  </tbody>
</table>

<?php echo CHtml::endForm(); ?><?php */?>