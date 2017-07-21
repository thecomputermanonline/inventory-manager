<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'Id',array('class'=>'span4','maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'ProductSKU',array('class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'ProductName',array('class'=>'span4','maxlength'=>40)); ?>

	<?php echo $form->textAreaRow($model,'ProductDescription',array('rows'=>6, 'cols'=>50, 'class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'SupplierID',array('class'=>'span4','maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'ProductCategoryId',array('class'=>'span4','maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'UnitsPerCarton',array('class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'UnitPrice',array('class'=>'span4','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'Discontinued',array('class'=>'span4')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
		    'buttonType'=>'submit',
		    'type'=>'primary',
		    'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
