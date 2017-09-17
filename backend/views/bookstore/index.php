<?php
$this->title = 'ArmaBook List';
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

<div class="fresh-table full-color-azure">
  <!--    Available colors for the full background: full-color-blue, full-color-azure, full-color-green, full-color-red, full-color-orange
  Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-green, toolbar-color-red, toolbar-color-orange
  -->

  <div class="toolbar">
    <button class="btn btn-default">รายการหนังสือ</button>
    <button class="btn btn-default">ประวัติการยืม</button>
  </div>

  <table id="fresh-table" class="table">
    <thead>
      <th data-field="select">เลือก</th>
      <th data-field="name" data-sortable="true">ชื่อหนังสือ</th>
      <th data-field="type" data-sortable="true">ประเภท</th>
      <th data-field="price" data-sortable="true">ราคา</th>
      <th data-field="rentday" data-sortable="true">จำนวนวันที่ยืม</th>
      <th data-field="charge" data-sortable="true">ค่าปรับ</th>
       <!-- <th data-field="actions" data-formatter="operateFormatter" data-events="operateEvents">Actions</th> -->
    </thead>
    <tbody>

      <?php foreach ($result as $var){?>
	       <tr>
	          <td>
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                </label>
              </td>
        		<td><?=$var['name']?></td>
        		<td><?=$var['type']?></td>
        		<td><?=$var['price']?> บาท</td>
        		<td><?=$var['days']?> วัน</td>
        		<td><?=$var['charge']?> บาท</td>
  	   </tr>
   <?php }?>

    </tbody>
  </table>
</div>
