<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="<?php echo Yii::app()->createUrl("dashboard"); ?>">Dashboard</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="javascript:;">DID Box</a></li>
</ul>
<?php $this->renderPartial("/layouts/_message"); ?>
<div class="row-fluid sortable ui-sortable">		
    <div class="box span12">
        <div data-original-title="" class="box-header">
            <h2><i class="halflings-icon folder-close"></i><span class="break"></span>DID Box</h2>
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
                            'class' => 'CCheckBoxColumn',
                            'selectableRows' => 2,
                            'value' => '$data["did_id"]',
                            "checkBoxHtmlOptions" => array("name" => "idList[]"),
                        ),
                        'did_number',
                        array(
                            'name' => 'provider_id',
                            'value' => '!empty($data->providerRel->username)?$data->providerRel->username:"N/A"'
                        ),
                        array(
                            'name' => 'status',
                            'value' => '!empty($data->statusArr[$data->status])?$data->statusArr[$data->status]:"N/A"'
                        ),
                        'did_availability',
                        'provider_monthly_cost',
                        'provider_per_minute_cost',
                        'customer_monthly_cost',
                        'customer_per_minute_cost',
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
                                    "url" => 'Yii::app()->createUrl(Yii::app()->controller->id."/update", array("id"=>$data->did_id))',
                                    "options" => array("class" => "addUpdateRecord mr5 btn btn-success", "title" => "Update"),
                                    "visible" => ($updateRight) ? 'true' : 'false',
                                ),
                                "deleteRecord" => array(
                                    "label" => '<i class="halflings-icon white trash"></i> ',
                                    "imageUrl" => false,
                                    "url" => 'Yii::app()->createUrl(Yii::app()->controller->id."/delete", array("id"=>$data->did_id))',
                                    "options" => array("class" => "deleteRecord btn btn-danger mr5", "title" => "Delete", "style" => "margin-left:10px;"),
                                    "visible" => ($deleteRight) ? 'true' : 'false',
                                ),
                            ),
                        ),
                    ),
                ));
                Yii::app()->clientScript->registerScript('actions', "
                        var idList = '';
                        $('.multipleDelete').live('change',function() 
                        {
                            var idList    = $('input[type=checkbox]:checked').serialize();
                            if(!idList){                                
                                alert('" . common::translateText("INVALID_SELECTION") . "');
                                $(this).val('');
                                return false;  
                            } 
                            if(!confirm('" . common::translateText("DELETE_CONFIRM") . "')){
                                $(this).val('');
                                return false;                        
                            }
                            
                            url = $(this).data('href').replace('SETSTATUS',$(this).val());
                            $.post(url,idList,function(res){
                                $(this).val('');
                                $.fn.yiiGridView.update('data-grid');
                                $('#flash-message').html(res).animate({opacity: 1.0}, 3000).fadeOut('slow');
                            });  
                        });
                        $('.deleteRecord').live('click',function() 
                        {
                            if(!confirm('" . common::translateText("DELETE_CONFIRM") . "')) return false;                        
                            var url = $(this).attr('href');
                            $.post(url,{status:'" . DidMaster::DELETED . "'},function(res){
                                $.fn.yiiGridView.update('data-grid');
                                $('#flash-message').html(res).animate({opacity: 1.0}, 3000).fadeOut('slow');
                            });  
                        });
                        $('.importRecord').live('click',function() {                        
                            var url = $(this).attr('href');
                            $.post(url,function(html){
                                $('#modalContainer').html(html);
                                $('#modalContainer .modal').modal();              
                            });
                            return false;
                        });
                    ");
                ?>
            </div>
        </div>
    </div>
</div>