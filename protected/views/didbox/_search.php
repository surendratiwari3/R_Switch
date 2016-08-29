<?php
Yii::app()->clientScript->registerScript('search', "
    $('#DidMaster_did_number').keyup(function(){
        search();
    });
    $('#search_form select').change(function(){
        search();
    });

    var search = function(){
        $.fn.yiiGridView.update('data-grid', {
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
                        <label><?php echo $model->getAttributeLabel("did_number"); ?> :</label>
                        <?php echo $form->textField($model, "did_number", array("class" => "form-control")); ?>
                    </div>
                    <div class="span3">
                        <label><?php echo $model->getAttributeLabel("provider_id"); ?> :</label>
                        <?php echo $form->dropDownList($model, "provider_id", UserMaster::model()->getProviderList(), array("class" => "form-control", "prompt" => common::translateText("DROPDOWN_TEXT"))); ?>
                    </div>
                    <div class="span3">
                        <label><?php echo $model->getAttributeLabel("did_availability"); ?> :</label>
                        <?php echo $form->dropDownList($model, 'did_availability', $model->availabilityArr, array("prompt" => common::translateText("DROPDOWN_TEXT"))); ?>
                    </div>
                    <div class="span3">
                        <label><?php echo $model->getAttributeLabel("status"); ?> :</label>
                        <?php echo $form->dropDownList($model, 'status', $model->statusArr, array("prompt" => common::translateText("DROPDOWN_TEXT"))); ?>
                    </div>
                </div>                    
            </div>   
        </div>
    </div>
</div>
<?php $this->endWidget(); ?>