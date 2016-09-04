<?php

Yii::app()->clientScript->registerScript('search', "
    $('#BuyCallRates_prefix').keyup(function(){
        search();
    });
     $('#BuyCallRates_destination').keyup(function(){
        search();
    });
     $('#BuyCallRates_rate_card_id').keyup(function(){
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
                               <?php echo CHtml::activeDropDownList($model,'rate_card_id', $model->getRatecard(),array('prompt' => 'Select Rate Card')); ?>
                    </div>
                    <div class="span3">
                        <label><?php echo $model->getAttributeLabel("rate_status"); ?> :</label>
                               <?php echo $form->dropDownList($model,'rate_status',array('1' => 'ACTIVE', '0' => 'INACTIVE'),array('prompt' => 'Select Rate Status'));?>
                    </div>
                </div>                    
            </div>   
        </div>
    </div>
</div>
<?php $this->endWidget(); ?>
