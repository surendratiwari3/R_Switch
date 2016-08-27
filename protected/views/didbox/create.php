<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="<?php echo Yii::app()->createUrl("dashboard"); ?>">Dashboard</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li>
        <i class="icon-folder-close"></i>
        <a href="<?php echo Yii::app()->createUrl(Yii::app()->controller->id) ?>">DID Box</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Create DID Box</a></li>
</ul>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Create DID Box</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <?php $this->renderPartial("_form", array("model" => $model)); ?>
        </div>
    </div>
</div>