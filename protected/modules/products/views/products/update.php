<?php
$this->breadcrumbs=array(
	'Products'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Update',
);

//$this->menu=array(
//	array('label'=>'List Products','url'=>array('index')),
//	array('label'=>'Create Products','url'=>array('create')),
//	array('label'=>'View Products','url'=>array('view','id'=>$model->Id)),
//	array('label'=>'Manage Products','url'=>array('admin')),
//);
?>




<div class="span1">
    <a href="<?php echo $this->createUrl('index'); ?>" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">4</span>
        <span class="label label-info">List Products</span>
    </a>
</div>
<div class="span1">
    <a href="<?php echo $this->createUrl('create'); ?>" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">V</span>
        <span class="label label-info">Create Products</span>
    </a>
</div>
<div class="span1">
    <a href="<?php echo $this->createUrl('view', array('id'=>$model->Id)); ?>" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">s</span>
        <span class="label label-info">Details</span>
    </a>
</div>
<div class="span1">
    <a href="<?php echo $this->createUrl('admin'); ?>" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">(</span>
        <span class="label label-info">Manage Products</span>
    </a>
</div>

   <div class="span7">
    <div class="aqua-panel">
        <div class="aqua-panel-header">
            <i class="modernpics icons32">r</i><span class="panel-divider"></span>
            <h2>Update Products <?php echo $model->Id; ?><span></span></h2>
            <div class="aqua-panel-tabs-icons pull-right">
                <a href="#" class="minimize">--</a>
                <a href="#" class="modernpics maximize">v</a>
            </div>
        </div>
        <div class="aqua-panel-content">


<?php echo $this->renderPartial('_form',array('model'=>$model, 'categorieslist'=>$categories, 'supplierslist'=>$suppliers)); ?>
               </div>
    </div>
</div>