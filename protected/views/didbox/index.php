<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="<?php echo Yii::app()->createUrl("dashboard"); ?>">Dashboard</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="javascript:;">DID Box</a></li>
</ul>
<?php $this->renderPartial("/layouts/_message"); ?>
<?php $this->renderPartial("_search", array("model" => $model)); ?>
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
            <div class="span10">
                <label>Action :</label> 
                <?php echo CHtml::dropDownList("DidMaster[status]", $model->status, $model->statusArr, array("prompt" => common::translateText("DROPDOWN_TEXT"), "class" => "multipleDelete", "data-href" => Yii::app()->createUrl(Yii::app()->controller->id . "/delete", array("status" => "SETSTATUS")))); ?>
            </div>
            <div class="span2 pull-right">
                <label>&nbsp;</label>
                <a class="btn btn-primary" title="Create Didbox" href="<?php echo Yii::app()->createUrl(Yii::app()->controller->id . "/create"); ?>">
                    <i class="icon-plus-sign"></i>
                </a>            
                <?php
                echo CHtml::Link('<i class="icon-download"></i>', array("didbox/import"), array(
                    "title" => "Import",
                    "class" => "btn btn-success importRecord"
                ));
                ?>
                <?php
                echo CHtml::Link('<i class="icon-file"></i>', "did_master.csv", array(
                    "title" => "Sample File",
                    "class" => "btn btn-blue"
                ));
                ?>
            </div>
            <div role="grid" class="dataTables_wrapper" id="DataTables_Table_0_wrapper">
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
			array(
			     'name' => 'did_availability',
			     'value' => '($data->did_availability==1)?"AVAILABLE":"NOT AVAILABLE"'
			), 
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
                            $('#modalContainer .modal').modal();                                          
                            return false;
                        });
                        $('.importRecord').hide();
                        $.post('" . Yii::app()->createUrl("didbox/import") . "',function(html){
                            $('#modalContainer').html(html);
                            $('.importRecord').show();
                        });
                    ");
                ?>
            </div>
        </div>
    </div>
</div>
