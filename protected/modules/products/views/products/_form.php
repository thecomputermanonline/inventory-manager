


<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'products-form',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'ProductSKU',array('class'=>'span3')); ?>

	<?php echo $form->textFieldRow($model,'ProductName',array('class'=>'span3','maxlength'=>40)); ?>

	<?php echo $form->textAreaRow($model,'ProductDescription',array('rows'=>6, 'cols'=>50, 'class'=>'span3')); ?>

	<?php //echo $form->textFieldRow($model,'SupplierID',array('class'=>'span4','maxlength'=>11)); ?>
<?php echo $form->dropDownListRow($model, 'SupplierID', $supplierslist, array('empty'=>'Select a Suppler')); ?>
<?php echo $form->dropDownListRow($model, 'ProductCategoryId', $categorieslist, array('empty'=>'Select a category')); ?>
	<?php //echo $form->textFieldRow($model,'ProductCategoryId',array('class'=>'span4','maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'UnitsPerCarton',array('class'=>'span3')); ?>

	<?php echo $form->textFieldRow($model,'UnitPrice',array('class'=>'span3','maxlength'=>10)); ?>

	<?php //echo $form->textFieldRow($model,'Discontinued',array('class'=>'span4')); ?>
    <?php echo $form->checkBoxRow($model,'Discontinued',array('class'=>'span0')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
                        'size'=>'large',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
