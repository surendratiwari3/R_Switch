<ul class="breadcrumb">
    <li>
        <i class="icon-user"></i>
        <a href="<?php echo Yii::app()->createUrl('packageMaster/admin') ?>">Rategroup</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Update Rategroup</a></li>
</ul>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Update Rategroup</h2>
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

