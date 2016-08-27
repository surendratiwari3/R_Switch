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
            "template"=>'{items}<div class="row-fluid"><div class="span12"><div class="dataTables_info" id="DataTables_Table_0_info">{summary}</div></div><div class="span12 center"><div class="dataTables_paginate paging_bootstrap pagination">{pager}</div></div></div>',
            "summaryText"=>"Showing {start} to {end} of {count} entries",
            "summaryCssClass"=>"dataTables_info",
            "emptyText"=>"No records found.",
            "enableSorting"=>true,
            "pagerCssClass"=>"dataTables_paginate paging_bootstrap dataTables_info",
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