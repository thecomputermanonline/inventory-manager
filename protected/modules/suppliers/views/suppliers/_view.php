<tr class="view">
<td>
    <table class="table table-striped table-condensed">
       
	 <tr><th><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</th>
	<td><?php echo CHtml::link(CHtml::encode($data->Id),array('view','Id'=>$data->Id)); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('CompanyName')); ?>:</th>
	<td><?php echo CHtml::encode($data->CompanyName); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('ContactName')); ?>:</th>
	<td><?php echo CHtml::encode($data->ContactName); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('ContactTitle')); ?>:</th>
	<td><?php echo CHtml::encode($data->ContactTitle); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('Address')); ?>:</th>
	<td><?php echo CHtml::encode($data->Address); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('City')); ?>:</th>
	<td><?php echo CHtml::encode($data->City); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('Country')); ?>:</th>
	<td><?php echo CHtml::encode($data->Country); ?>
	</td></tr>

	<?php /*
	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('Phone')); ?>:</th>
	<td><?php echo CHtml::encode($data->Phone); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('Fax')); ?>:</th>
	<td><?php echo CHtml::encode($data->Fax); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('HomePage')); ?>:</th>
	<td><?php echo CHtml::encode($data->HomePage); ?>
	</td></tr>

	*/ ?>
    </table>
</td>
</tr>