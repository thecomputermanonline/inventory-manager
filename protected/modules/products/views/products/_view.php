<tr class="view">
<td>
    <table class="table table-striped table-condensed">
       
	 <tr><th><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</th>
	<td><?php echo CHtml::link(CHtml::encode($data->Id),array('view','id'=>$data->Id)); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('ProductSKU')); ?>:</th>
	<td><?php echo CHtml::encode($data->ProductSKU); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('ProductName')); ?>:</th>
	<td><?php echo CHtml::encode($data->ProductName); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('ProductDescription')); ?>:</th>
	<td><?php echo CHtml::encode($data->ProductDescription); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('SupplierID')); ?>:</th>
	<td><?php echo CHtml::encode($data->SupplierID); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('ProductCategoryId')); ?>:</th>
	<td><?php echo CHtml::encode($data->ProductCategoryId); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('UnitsPerCarton')); ?>:</th>
	<td><?php echo CHtml::encode($data->UnitsPerCarton); ?>
	</td></tr>

	<?php /*
	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('UnitPrice')); ?>:</th>
	<td><?php echo CHtml::encode($data->UnitPrice); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('Discontinued')); ?>:</th>
	<td><?php echo CHtml::encode($data->Discontinued); ?>
	</td></tr>

	*/ ?>
    </table>
</td>
</tr>