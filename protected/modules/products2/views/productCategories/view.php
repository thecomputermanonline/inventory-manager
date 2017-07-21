<?php
$this->breadcrumbs=array(
	'Product Categories'=>array('index'),
	$model->Id,
);

//$this->menu=array(
//array('label'=>'List ProductCategories','url'=>array('index')),
//array('label'=>'Create ProductCategories','url'=>array('create')),
//array('label'=>'Update ProductCategories','url'=>array('update','id'=>$model->Id)),
//array('label'=>'Delete ProductCategories','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
//array('label'=>'Manage ProductCategories','url'=>array('admin')),
//);
?>


<div class="span1">
    <a href="<?php echo $this->createUrl('index'); ?>" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">4</span>
        <span class="label label-info">List Product Categories</span>
    </a>
</div>
<div class="span1">
    <a href="<?php echo $this->createUrl('create'); ?>" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">V</span>
        <span class="label label-info">Create ProductCategories</span>
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
        <span class="label label-info">Manage Product Categories</span>
    </a>
</div>

<div class="span1">
  <?php echo CHtml::link('<span class="modernpics newline icons-red">x</span><span class="label label-inverse">Delete</span>', '#', array('class'=>'aqua-shortcut text-align-center delete','submit' => array('delete', 'id' => $model->Id), 'confirm' => 'Are you sure you want to delete this item?')); ?></div>


<div class="span7">
    <div class="aqua-panel">
        <div class="aqua-panel-header">
            <i class="modernpics icons32">r</i><span class="panel-divider"></span>
            <h2>View ProductCategories #<?php echo $model->Id; ?><span></span></h2>
            <div class="aqua-panel-tabs-icons pull-right">
                <a href="#" class="minimize">--</a>
                <a href="#" class="modernpics maximize">v</a>
            </div>
        </div>
        <div class="aqua-panel-content">
            <?php $this->widget('bootstrap.widgets.TbDetailView',array(
            'data'=>$model,
            'attributes'=>array(
            		'Id',
		'CategoryName',
		'CategoryDescription',
            ),
            )); ?>
        </div>
    </div>
</div>