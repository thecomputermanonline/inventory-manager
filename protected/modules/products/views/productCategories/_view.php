<tr class="view">
<td>
    <table class="table table-striped table-condensed">
       
	 <tr><th><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</th>
	<td><?php echo CHtml::link(CHtml::encode($data->Id),array('view','id'=>$data->Id)); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('CategoryName')); ?>:</th>
	<td><?php echo CHtml::encode($data->CategoryName); ?>
	</td></tr>

	<tr><th><?php echo CHtml::encode($data->getAttributeLabel('CategoryDescription')); ?>:</th>
	<td><?php echo CHtml::encode($data->CategoryDescription); ?>
	</td></tr>

    </table>
</td>
</tr>