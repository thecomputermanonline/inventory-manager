<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'Id',array('class'=>'span4','maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'CategoryName',array('class'=>'span4','maxlength'=>255)); ?>

	<?php echo $form->textAreaRow($model,'CategoryDescription',array('rows'=>6, 'cols'=>50, 'class'=>'span4')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
		    'buttonType'=>'submit',
		    'type'=>'primary',
		    'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
