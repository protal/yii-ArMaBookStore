<?php
$this->title = 'BookStore Log File';
$baseUrl=\Yii::getAlias('@web');
use yii\web\View;
$str = <<<EOT
$('#fresh-table').bootstrapTable({
    toolbar: ".toolbar",

    showRefresh: true,
    search: true,
    showToggle: true,
    showColumns: true,
    pagination: true,
    striped: true,
    pageSize: 8,
    pageList: [8,10,25,50,100],

    formatShowingRows: function(pageFrom, pageTo, totalRows){
        //do nothing here, we don't want to show the text "showing x of y from..."
    },
    formatRecordsPerPage: function(pageNumber){
        return pageNumber + " rows visible";
    },
    icons: {
        refresh: 'fa fa-refresh',
        toggle: 'fa fa-th-list',
        columns: 'fa fa-columns',
        detailOpen: 'fa fa-plus-circle',
        detailClose: 'fa fa-minus-circle'
    }
});
$(window).resize(function () {
    $('#fresh-table').bootstrapTable('resetView');
});
EOT;
$this->registerJS($str,View::POS_LOAD,'form-js');

 ?>

<div class="fresh-table full-color-orange">
  <!--    Available colors for the full background: full-color-blue, full-color-azure, full-color-green, full-color-red, full-color-orange
  Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-green, toolbar-color-red, toolbar-color-orange
  -->

  <div class="toolbar">
    <button class="btn btn-default">กลับ</button>
    <button class="btn btn-default">รายการหนังสือ</button>
  </div>

  <table id="fresh-table" class="table">
    <thead>
       
       
      <th data-field="name" data-sortable="true">ชื่อผู้ยืม</th>
      <th data-field="" data-sortable="true">รายการหนังสือ</th>
      <th data-field="" data-sortable="true">สถานะ</th>
      
       <!-- <th data-field="actions" data-formatter="operateFormatter" data-events="operateEvents">Actions</th> -->
    </thead>
    <tbody>
       
      <?php foreach ($result as $var){?>
	       <tr>
              
        		<td>1</td>
        		<td>2</td>
        		<td>3</td>
        		
  	   </tr>
   <?php }?>

    </tbody>
  </table>
</div>
