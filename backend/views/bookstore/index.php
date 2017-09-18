<?php
$this->title = 'ArmaBook List';
$baseUrl=\Yii::getAlias('@web');
use yii\web\View;
$str = <<<EOT
var price = 0;
var book_count = 0;
var books = [];
$('#fresh-table').bootstrapTable({
  toolbar: ".toolbar",
  maintainSelected: true,
  showRefresh: true,
  search: true,
  showToggle: true,
  showColumns: true,
  pagination: true,
  striped: true,
  pageSize: 5,
  pageList: [8, 10, 25, 50, 100],

  formatShowingRows: function(pageFrom, pageTo, totalRows) {
    //do nothing here, we don't want to show the text "showing x of y from..."
  },
  formatRecordsPerPage: function(pageNumber) {
    return pageNumber + " rows visible";
  },
  icons: {
    refresh: 'fa fa-refresh',
    toggle: 'fa fa-th-list',
    columns: 'fa fa-columns',
    detailOpen: 'fa fa-plus-circle',
    detailClose: 'fa fa-minus-circle'
  },

});
$(window).resize(function() {
  $('#fresh-table').bootstrapTable('resetView');
});

//check
$('#fresh-table').on('check.bs.table.bs.table', function (e,row,element) {
    price += row._data.price;
    book_count++;
    $('#price').html(price);
    $('#book_count').html(book_count);
    books.push(row._data.id);
    console.log(books);
});

//uncheck
$('#fresh-table').on('uncheck.bs.table.bs.table', function (e,row,element) {
    price -= row._data.price;
    book_count--;
    $('#price').html(price);
    $('#book_count').html(book_count);

    //remove
    var index = books.indexOf(row._data.id);
    if (index >= 0) {
      books.splice( index, 1 );
    }
    console.log(books);
});

//check-all
$('#fresh-table').on('check-all.bs.table.bs.table', function (e,rows) {
  price = 0;
  book_count = 0;
  books = [];
  for (i = 0; i < rows.length; i++) {
    if (rows[i].select===true) {
      console.log(rows[i]);
      price += rows[i]._data.price;
      book_count++;
      books.push(rows[i]._data.id);
    }
  }
  $('#price').html(price);
  $('#book_count').html(book_count);
  console.log(books);
});

//uncheck
$('#fresh-table').on('uncheck-all.bs.table.bs.table', function (e,rows) {
  price = 0;
  book_count = 0;
  books = [];
  for (i = 0; i < rows.length; i++) {
    if (rows[i].select===true) {
      price += rows[i]._data.price;
      book_count++;
      books.push(rows[i]._data.id);
    }
  }
  $('#price').html(price);
  $('#book_count').html(book_count);
  console.log(books);
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
  <table id="fresh-table" data-click-to-select="true" class="table">
    <thead>
      <th data-field="select" data-checkbox="true" >เลือก</th>
      <th data-field="name" data-sortable="true">ชื่อหนังสือ</th>
      <th data-field="type" data-sortable="true">ประเภท</th>
      <th data-field="price" data-sortable="true">ราคา</th>
      <th data-field="rentday" data-sortable="true">จำนวนวันที่ยืม</th>
      <th data-field="charge" data-sortable="true">ค่าปรับ</th>
      <th data-field="total" data-sortable="true">จำนวนหนังสือ</th>
       <!-- <th data-field="actions" data-formatter="operateFormatter" data-events="operateEvents">Actions</th> -->
    </thead>
    <tbody>
      <?php foreach ($result as $var){?>
	       <tr data-events="selectTable" data-id="<?=$var['_id']?>" data-price="<?=$var['price']?>">
	          <td>
            </td>
        		<td><?=$var['name']?></td>
        		<td><?=$var['type']?></td>
        		<td><?=$var['price']?> บาท</td>
        		<td><?=$var['days']?> วัน</td>
        		<td><?=$var['charge']?> บาท</td>
            <td><?=$var['total']?></td>
  	   </tr>
   <?php }?>

    </tbody>
  </table>
</div>
<div class="row justify-content-md-center mt-3">
  <div class="col-4 text-center">
    <p>จำนวนหนังสือทั้งหมด <b id="book_count">0</b> เล่ม</p>
    <p>ราคา <b id="price">0</b> บาท</p>
    <button type="button" class="btn btn-success" id="rent">
      ยืมเลย
    </button>
  </div>
</div>
