<?php
$this->breadcrumbs=array(
	///'Orders'=>array('index'),
	$model->Id,
);

//$this->menu=array(
//array('label'=>'List Orders','url'=>array('index')),
//array('label'=>'Create Orders','url'=>array('create')),
//array('label'=>'Update Orders','url'=>array('update','id'=>$model->id)),
//array('label'=>'Delete Orders','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
//array('label'=>'Manage Orders','url'=>array('admin')),
//);
?>


<!--<div class="span1">
    <a href="<?php echo $this->createUrl('index'); ?>" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">4</span>
        <span class="label label-info">List Orders</span>
    </a>
</div>-->
 <?php //if(yii::app()->user->data()->superuser):?>
<div class="span1">
    <a href="<?php echo $this->createUrl('create'); ?>" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">V</span>
        <span class="label label-info">Create Orders</span>
    </a>
</div>

<div class="span1">
    <a href="<?php echo $this->createUrl('update', array('id'=>$model->Id)); ?>" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">r</span>
        <span class="label label-info">Update</span>
    </a>
</div>
<div class="span1">
    <a href="<?php echo $this->createUrl('admin'); ?>" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">(</span>
        <span class="label label-info">Manage Orders</span>
    </a>
</div>

<div class="span1">
  <?php //echo CHtml::link('<span class="modernpics newline icons-red">x</span><span class="label label-inverse">Delete</span>', '#', array('class'=>'aqua-shortcut text-align-center delete','submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')); ?></div>
 <?php //endif;?>
<div class="clear"></div>
<?php //$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
//	'id'=>'orders-form',
//	'enableAjaxValidation'=>true,
//	'enableClientValidation'=>true,
//)); ?>
<?php echo CHtml::beginForm(); ?>
<div class="span3">
    <div class="aqua-panel">
        <div class="aqua-panel-header">
            <i class="modernpics icons32">r</i><span class="panel-divider"></span>
            <h2>Suppller for  order #<?php echo $model->Id; ?><span></span></h2>
            <div class="aqua-panel-tabs-icons pull-right">
                <a href="#" class="minimize">--</a>
                <a href="#" class="modernpics maximize">v</a>
            </div>
        </div>
        
        
        <div class="aqua-panel-content">
       <div class="well">

                <div id="accordion2" class="accordion">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a href="#collapseOne" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle">
                                <span class="modernpics icons24">f</span> Select a Supplier 
                            </a>
                        </div>
                        <div class="accordion-body collapse" id="collapseOne" style="height: 0px;">
                            <div class="accordion-inner">
   
    <?php //echo CHtml::dropDownList('', 'SupplierID', $suppliers, array('empty'=>'Select a Suppler')); ?>
    
               <?php   echo CHtml::dropDownList('Orders[SupplierId]', 'SupplierID', $suppliers, array('empty'=>'Select a Suppler', 'id' => 'xSupplierID')
			
				); 
				 
				?>
              
                            </div>
                        </div>
                    </div>
                </div></div>
                
              
     

    </div> 
   
</div>
</div>
<div class="span3">
    <div class="aqua-panel">
        <div class="aqua-panel-header">
            <i class="modernpics icons32">r</i><span class="panel-divider"></span>
            <h2>Suppller for  order #<?php echo $model->Id; ?><span></span></h2>
            <div class="aqua-panel-tabs-icons pull-right">
                <a href="#" class="minimize">--</a>
                <a href="#" class="modernpics maximize">v</a>
            </div>
        </div>
        
        
        <div class="aqua-panel-content">
       <div class="well">

                <div id="accordion2" class="accordion">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a href="#collapseOne" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle">
                                <span class="modernpics icons24">f</span> Select a product 
                            </a>
                        </div>
                        <div class="accordion-body collapse" id="collapseOne" style="height: 0px;">
                            <div class="accordion-inner">
   
    <?php //echo CHtml::dropDownList('', 'SupplierID', $suppliers, array('empty'=>'Select a product')); ?>
    
              
              
                            </div>
                        </div>
                    </div>
                </div></div>
                
              
     

    </div> 
   
</div>
</div>

<div class="span7">
    <div class="aqua-panel">
        <div class="aqua-panel-header">
            <i class="modernpics icons32">b</i><span class="panel-divider"></span><h2> Products for this order </h2>
            <div class="aqua-panel-tabs-icons pull-right">
                <a href="#" class="minimize">--</a>
                <a href="#" class="modernpics maximize">v</a>
            </div>
        </div>
        <div class="aqua-panel-content">
        <span style="color:#F00" id="loading">Please wait...</span>
        <div id="_supplier_products"></div>
  </div>
    </div>

</div>



    <?php //$this->endWidget(); ?> 
    <?php echo CHtml::endForm(); ?>            
    


</script>        <script type="text/javascript">
//<![CDATA[
$(document).ready(function () {$('#loading').hide(); $("#xSupplierID").bind("change", function
(event) {$.ajax({async:true, beforeSend:function (XMLHttpRequest)
{ $('#loading').fadeIn();}, complete:function (XMLHttpRequest, textStatus)
{$('#loading').fadeOut();}, data:$("#xSupplierID").serialize(),
dataType:"html", success:function (data, textStatus)
{$("#_supplier_products").html(data);}, type:"POST",
url:"<?php echo CController::createUrl('/orders/orders/getSupplierProducts'); ?>"});
return false;});});
//]]>
</script>