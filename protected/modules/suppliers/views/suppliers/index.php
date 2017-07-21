<?php
$this->breadcrumbs=array(
	'Suppliers',
);

//$this->menu=array(
//array('label'=>'Create Suppliers','url'=>array('create')),
//array('label'=>'Manage Suppliers','url'=>array('admin')),
//);
?>


<div class="span1">
    <a href="<?php echo $this->createUrl('create'); ?>" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">V</span>
        <span class="label label-info">Create Suppliers</span>
    </a>
</div>
<div class="span1">
    <a href="<?php echo $this->createUrl('admin'); ?>" class="aqua-shortcut text-align-center">
        <span class="modernpics newline">(</span>
        <span class="label label-info">Manage Suppliers</span>
    </a>
</div>

<div class="span7">
    <div class="aqua-panel">
        <div class="aqua-panel-header">
            <i class="modernpics icons32">r</i><span class="panel-divider"></span>
            <h2>Suppliers<span></span></h2>
            <div class="aqua-panel-tabs-icons pull-right">
                <a href="#" class="minimize">--</a>
                <a href="#" class="modernpics maximize">v</a>
            </div>
        </div>
        <div class="aqua-panel-content">
            <?php $this->widget('bootstrap.widgets.TbListView',array(
            'dataProvider'=>$dataProvider,
            'template'=>'{summary}{pager}{items}{summary}{pager}',
            'itemView'=>'_view',
            'itemsTagName'=>'table'
            )); ?>
        </div>
    </div>
</div>
