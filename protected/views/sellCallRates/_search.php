<?php
Yii::app()->clientScript->registerScript('search', "
    $('#RategroupToRatecardMap_did_number').keyup(function(){
        search();
    });
    $('#search_form select').change(function(){
        search();
    });

    var search = function(){
        $.fn.yiiGridView.update('buy-call-rates-grid', {
            data: $('#search_form').serialize()
        });
        return false;
    }
");

$form = $this->beginWidget('CActiveForm', array("method" => "GET", "id" => "search_form", "htmlOptions" => array("onSubmit" => "return false")));
?>
<div class="row-fluid">
    <div class="box span12">
        <div class="box-header">
            <h2><i class="icon-search"></i><span class="break"></span>Search</h2>            
            <h2 class="box-icon">
                <label style="margin-top: -5px;" class="pull-left"> Record per page : </label>
                <?php echo $form->dropDownList($model, "pageSize", Yii::app()->params->pageSizeList, array("style" => " margin-top: -10px;")); ?>
            </h2>
        </div>
        <div class="box-content">
            <div class="row-fluid">
                <div class="span12">
                    <div class="span3">
                        <label><?php echo $model->getAttributeLabel("prefix"); ?> :</label>
                        <?php echo $form->textField($model, "prefix", array("class" => "form-control")); ?>
                    </div>
                   <div class="span3">
                        <label><?php echo $model->getAttributeLabel("destination"); ?> :</label>
                        <?php echo $form->textField($model, "destination", array("class" => "form-control")); ?>
                    </div>
                   <div class="span3">
                        <label><?php echo $model->getAttributeLabel("rate_card_id"); ?> :</label>
                        <?php echo $form->textField($model, "rate_card_id", array("class" => "form-control")); ?>
                    </div>
                </div>                    
            </div>   
        </div>
    </div>
</div>
<?php $this->endWidget(); ?>
