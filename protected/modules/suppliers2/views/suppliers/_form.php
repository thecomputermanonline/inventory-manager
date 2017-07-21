


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

<?php $this->endWidget(); ?>
