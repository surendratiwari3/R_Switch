<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="<?php echo Yii::app()->createUrl("dashboard"); ?>">Dashboard</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="javascript:;">DID Subscription</a></li>
</ul>
<?php $this->renderPartial("/layouts/_message"); ?>
<div class="row-fluid sortable ui-sortable">		
    <div class="box span12">
        <div data-original-title="" class="box-header">
            <h2><i class="icon-rss"></i><span class="break"></span>DID Subscription</h2>
            <div class="box-icon">
                <a class="btn-setting" href="#"><i class="halflings-icon wrench"></i></a>
                <a class="btn-minimize" href="#"><i class="halflings-icon chevron-up"></i></a>
                <a class="btn-close" href="#"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <div role="grid" class="dataTables_wrapper" id="DataTables_Table_0_wrapper">                
                <?php $this->renderPartial("_search", array("model" => $model)); ?>
                <?php
                $updateRight = true;
                $deleteRight = true;
                $columnClass = (!$updateRight && !$deleteRight) ? "hide" : "";
                $this->widget("zii.widgets.grid.CGridView", array(
                    "id" => "data-grid",
                    "dataProvider" => $model->search(),
                    "columns" => array(
                        array(
                            'name' => 'user_id',
                            'value' => '!empty($data->userRel->username)?$data->userRel->username:"N/A"'
                        ),
                        array(
                            'name' => 'did_id',
                            'value' => '!empty($data->didRel->did_number)?$data->didRel->did_number:"N/A"'
                        ),
                        array(
                            'name' => 'didRel.providerRel.username',
                            'value' => '!empty($data->didRel->providerRel->username)?$data->didRel->providerRel->username:"N/A"'
                        ),
                        'subscription_type',
                        array(
                            'name' => 'subcription_status',
                            'value' => '!empty($data->statusArr[$data->subcription_status])?$data->statusArr[$data->subcription_status]:"N/A"'
                        ),
                        'max_inbound_call',
                        'did_user_ip',
                        array(
                            "class" => "CButtonColumn",
                            "header" => "Action",
                            "htmlOptions" => array("width" => "10%", "class" => "text-center $columnClass"),
                            "headerHtmlOptions" => array("width" => "10%", "class" => "text-center $columnClass"),
                            "template" => '{updateRecord}{deleteRecord}',
                            "buttons" => array(
                                "updateRecord" => array(
                                    "label" => '<i class="halflings-icon white edit"></i> ',
                                    "imageUrl" => false,
                                    "url" => 'Yii::app()->createUrl(Yii::app()->controller->id."/update", array("id"=>$data->did_subscription_id))',
                                    "options" => array("class" => "addUpdateRecord mr5 btn btn-success", "title" => "Update"),
                                    "visible" => ($updateRight) ? 'true' : 'false',
                                ),
                                "deleteRecord" => array(
                                    "label" => '<i class="halflings-icon white trash"></i> ',
                                    "imageUrl" => false,
                                    "url" => 'Yii::app()->createUrl(Yii::app()->controller->id."/delete", array("id"=>$data->did_subscription_id))',
                                    "options" => array("class" => "deleteRecord btn btn-danger mr5", "title" => "Delete", "style" => "margin-left:10px;"),
                                    "visible" => ($deleteRight) ? 'true' : 'false',
                                ),
                            ),
                        ),
                    ),
                ));
                Yii::app()->clientScript->registerScript('actions', "                        
                        $('.deleteRecord').live('click',function() 
                        {
                            if(!confirm('" . common::translateText("DELETE_CONFIRM") . "')) return false;                        
                            var url = $(this).attr('href');
                            $.post(url,{status:'" . DidSubscription::DELETED . "'},function(res){
                                $.fn.yiiGridView.update('data-grid');
                                $('#flash-message').html(res).animate({opacity: 1.0}, 3000).fadeOut('slow');
                            });  
                        });
                    ");
                ?>
            </div>
        </div>
    </div>
</div>