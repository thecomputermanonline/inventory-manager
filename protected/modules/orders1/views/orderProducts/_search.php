<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'OrderId',array('class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'ProductId',array('class'=>'span4','maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'Quantity',array('class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'LineTotal',array('class'=>'span4','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'CreatedBy',array('class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'ModifiedBy',array('class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'CreatedOn',array('class'=>'span4')); ?>

	<?php echo $form->textFieldRow($model,'ModifiedOn',array('class'=>'span4')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
		    'buttonType'=>'submit',
		    'type'=>'primary',
		    'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
