<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'Id',array('class'=>'span4','maxlength'=>11)); ?>

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
		    'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
