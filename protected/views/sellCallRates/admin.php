
<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="<?php echo Yii::app()->createUrl("dashboard"); ?>">Dashboard</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="javascript:;">Manage Sale Call Rates</a></li>
</ul>
<?php $this->renderPartial("/layouts/_message"); ?>
<?php $this->renderPartial("_search", array("model" => $model)); ?>
<div class="row-fluid sortable ui-sortable">		
    <div class="box span12">
        <div class="box-header">
            <h2><i class="icon-rss"></i><span class="break"></span>Manage Sale Call Rates</h2>
            <h2 class="box-icon">
                <a style="margin-top:-9px;" title="Create Did Subscription" href="<?php echo Yii::app()->createUrl(Yii::app()->controller->id . "/create"); ?>">
                    <h2><i class="icon-plus-sign"></i></h2>
                    Create Sale Call Rate
                </a>
            </h2>
        </div>
        <div class="box-content">
            <div class="span2 pull-right">
                <label>&nbsp;</label>
                </a>            
             
            </div>
            <div role="grid" class="dataTables_wrapper" id="DataTables_Table_0_wrapper">                
                <?php
                $updateRight = true;
                $deleteRight = true;
                $columnClass = (!$updateRight && !$deleteRight) ? "hide" : "";
                $this->widget("zii.widgets.grid.CGridView", array(
                    "id" => "sell-call-rates-grid",
                    "dataProvider" => $model->search(),
                    "columns" => array(
			'prefix',
			'destination',
			'connection_cost',
			'disconnection_cost',
			'grace_duration',
			'min_duration',
			'pulse_rate',
			'pulse_duration',
			'rate_card_id',
			'rate_status',
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
                                    "url" => 'Yii::app()->createUrl("sellCallRates/update", array("id"=>$data->sell_call_rates_id))',
                                    "options" => array("class" => "addUpdateRecord mr5 btn btn-success", "title" => "Update"),
                                    "visible" => ($updateRight) ? 'true' : 'false',
                                ),
                                "deleteRecord" => array(
                                    "label" => '<i class="halflings-icon white trash"></i> ',
                                    "imageUrl" => false,
                                    "url" => 'Yii::app()->createUrl("sellCallRates/delete", array("id"=>$data->sell_call_rates_id))',
                                    "options" => array("class" => "deleteRecord btn btn-danger mr5", "title" => "Delete", "style" => "margin-left:10px;"),
                                    "visible" => ($deleteRight) ? 'true' : 'false',
                                ),
                            ),
                        ),
                    ),
                ));
                Yii::app()->clientScript->registerScript('actions', "
                    $('.deleteRecord').live('click',function() {
                        if(!confirm('Are you sure to delete ?')) return false;                        
                        var url = $(this).attr('href');
                        $.post(url,function(res){
                            $.fn.yiiGridView.update('sell-call-rates-grid');
                            $('#flash-message').html(res).animate({opacity: 1.0}, 3000).fadeOut('slow');
                        });
                        return false;
                    });
                ");
                ?>
            </div>
        </div>
    </div>
    </div>
