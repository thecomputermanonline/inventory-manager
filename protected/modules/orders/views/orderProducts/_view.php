<tr class="view">
<td>
    <table class="table table-striped table-condensed">
       
	 <tr><th><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</th>
	<td><?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('OrderId')); ?>:</th>
	<td><?php echo CHtml::encode($data->OrderId); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('ProductId')); ?>:</th>
	<td><?php echo CHtml::encode($data->ProductId); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('Quantity')); ?>:</th>
	<td><?php echo CHtml::encode($data->Quantity); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('LineTotal')); ?>:</th>
	<td><?php echo CHtml::encode($data->LineTotal); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('CreatedBy')); ?>:</th>
	<td><?php echo CHtml::encode($data->CreatedBy); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('ModifiedBy')); ?>:</th>
	<td><?php echo CHtml::encode($data->ModifiedBy); ?>
	</td></tr>

	<?php /*
	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('CreatedOn')); ?>:</th>
	<td><?php echo CHtml::encode($data->CreatedOn); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('ModifiedOn')); ?>:</th>
	<td><?php echo CHtml::encode($data->ModifiedOn); ?>
	</td></tr>

	*/ ?>
    </table>
</td>
</tr>