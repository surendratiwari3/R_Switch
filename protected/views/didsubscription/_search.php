<?php
Yii::app()->clientScript->registerScript('search', "
$('#search_form #DidSubscription_did_user_ip').keyup(function(){
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
                    <div class="span4">
                        <label><?php echo $model->getAttributeLabel("did_user_ip"); ?> </label>
                        <?php echo $form->textField($model, "did_user_ip", array("class" => "form-control")); ?>
                    </div>
                    <div class="span4">
                        <label><?php echo $model->getAttributeLabel('subscription_type', array("class" => "control-label")); ?></label>
                        <?php echo $form->dropDownList($model, 'subscription_type', $model->subscriptionType, array("prompt" => common::translateText("DROPDOWN_TEXT"))); ?>
                    </div>
                    <div class="span4">
                        <label><?php echo $model->getAttributeLabel('subcription_status', array("class" => "control-label")); ?></label>
                        <?php unset($model->statusArr[DidSubscription::DELETED]); ?>
                        <?php echo $form->dropDownList($model, 'subcription_status', $model->statusArr, array("prompt" => common::translateText("DROPDOWN_TEXT"))); ?>
                    </div>
                </div>                    
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="span4">
                        <label><?php echo $model->getAttributeLabel("provider_id"); ?> </label>
                        <?php echo $form->dropDownList($model, 'provider_id', UserMaster::model()->getProviderList(), array("prompt" => common::translateText("DROPDOWN_TEXT"))); ?>
                    </div>
                    <div class="span4">
                        <label><?php echo $model->getAttributeLabel("did_id"); ?> </label>
                        <?php echo $form->dropDownList($model, 'did_id', DidMaster::model()->getDidList(DidMaster::ACTIVE), array("prompt" => common::translateText("DROPDOWN_TEXT"))); ?>
                    </div>
                    <div class="span4">
                        <label><?php echo $model->getAttributeLabel("user_id"); ?> </label>
                        <?php echo $form->dropDownList($model, 'user_id', UserMaster::model()->getUserList(), array("prompt" => common::translateText("DROPDOWN_TEXT"))); ?>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</div>
<?php $this->endWidget(); ?>
