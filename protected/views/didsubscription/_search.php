<div class="row-fluid">
    <?php
    Yii::app()->clientScript->registerScript('search', "
        $('#DidSubscription_did_subscription_id').keyup(function(){
            search();
        });
        $('#DidSubscription_pageSize').change(function(){
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
    <div class="span5">
        <label>Records per page : </label>
        <?php echo $form->dropDownList($model, "pageSize", Yii::app()->params->pageSizeList); ?>
    </div>
    <div class="span4">
        <label>Search : </label>
        <?php echo $form->textField($model, "did_subscription_id", array("class" => "form-control")); ?>
    </div>
    <div class="span1 pull-right">
        <label>&nbsp;</label>
        <a class="btn btn-primary" title="Create Didbox" href="<?php echo Yii::app()->createUrl(Yii::app()->controller->id . "/create"); ?>">
            <i class="icon-plus-sign"></i>
        </a>
    </div>
</div>               
<?php $this->endWidget(); ?>
</div>