<?php
return array(
    'widgets' => array(
        'CLinkPager' => array(
            'htmlOptions' => array(
                'class' => 'pagination'
            ),
            'header' => false,
            'maxButtonCount' => 5,
            'cssFile' => false,
        ),
        'CGridView' => array(            
            "itemsCssClass"=>"table table-bordered table-hover dataTable",
            "htmlOptions"=>array("class"=>"dataTables_wrapper"),
            "enablePagination"=>true,
            "template"=>'<div class="table-responsive">{items}</div><div class="row"><div class="col-sm-6">{pager}</div><div class="col-sm-6">{summary}</div></div>',
            "summaryText"=>"Showing {start} to {end} of {count} entries",
            "summaryCssClass"=>"dataTables_info",
            "emptyText"=>"No records found.",
            "enableSorting"=>true,
            "pagerCssClass"=>"dataTables_paginate paging_bootstrap",
            "pager"=>array(
                "header"         => "",
                "firstPageLabel" => "First",
                "prevPageLabel"  => "Previous",
                "nextPageLabel"  => "Next",
                "lastPageLabel"  => "Last",
                "htmlOptions"=>array("class"=>"pagination")
            ), 
        ),
    ),
);