<tr class="view">
<td>
    <table class="table table-striped table-condensed">
       
	 <tr><th><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</th>
	<td><?php echo CHtml::link(CHtml::encode($data->Id),array('view','id'=>$data->Id)); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('SupplierId')); ?>:</th>
	<td><?php echo CHtml::encode($data->SupplierId); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('TotalPrice')); ?>:</th>
	<td><?php echo CHtml::encode($data->TotalPrice); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('OrderDate')); ?>:</th>
	<td><?php echo CHtml::encode($data->OrderDate); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('OrderStatus')); ?>:</th>
	<td><?php echo CHtml::encode($data->OrderStatus); ?>
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