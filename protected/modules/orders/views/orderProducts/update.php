<?php
$this->breadcrumbs=array(
	'Order Products'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

//$this->menu=array(
//	array('label'=>'List OrderProducts','url'=>array('index')),
//	array('label'=>'Create OrderProducts','url'=>array('create')),
//	array('label'=>'View OrderProducts','url'=>array('view','id'=>$model->id)),
//	array('label'=>'Manage OrderProducts','url'=>array('admin')),
//);
?>




<div class="span1">
    <a href="<?php echo $this->createUrl('index'); ?>" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">4</span>
        <span class="label label-info">List Order Products</span>
    </a>
</div>
<div class="span1">
    <a href="<?php echo $this->createUrl('create'); ?>" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">V</span>
        <span class="label label-info">Create OrderProducts</span>
    </a>
</div>
<div class="span1">
    <a href="<?php echo $this->createUrl('view', array('id'=>$model->id)); ?>" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">s</span>
        <span class="label label-info">Details</span>
    </a>
</div>
<div class="span1">
    <a href="<?php echo $this->createUrl('admin'); ?>" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">(</span>
        <span class="label label-info">Manage Order Products</span>
    </a>
</div>

   <div class="span7">
    <div class="aqua-panel">
        <div class="aqua-panel-header">
            <i class="modernpics icons32">r</i><span class="panel-divider"></span>
            <h2>Update OrderProducts <?php echo $model->id; ?><span></span></h2>
            <div class="aqua-panel-tabs-icons pull-right">
                <a href="#" class="minimize">--</a>
                <a href="#" class="modernpics maximize">v</a>
            </div>
        </div>
        <div class="aqua-panel-content">


<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
               </div>
    </div>
</div>