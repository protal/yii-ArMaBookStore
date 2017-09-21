<?php
$this->title = 'BookStore Log File';
$baseUrl=\Yii::getAlias('@web');
use backend\models\Book;
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
 <div class="row">

    <div class="col-12">
      <div class="pull-left">
        <h1>ArmaBookStore</h1>
      </div>
       <div class="pull-right text-right">
         <?php if (isset($user)): ?>

           <?=$user->firstname?>  <?=$user->lastname?>
           <a href="<?=$baseUrl."/auth/logout"?>">ออกจากระบบ</a>

           <br>
           <br>
           <br>
             <br>
             <br>
         <?php else: ?>
           <a href="<?=$baseUrl."/auth/login"?>" class="btn btn-primary">
             Login
           </a>
           <br>
           <br>
         <?php endif; ?>

       </div>
       <br>

     </div>
 </div>

<div class="fresh-table toolbar-color-azure">
  <!--    Available colors for the full background: full-color-blue, full-color-azure, full-color-green, full-color-red, full-color-orange
  Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-green, toolbar-color-red, toolbar-color-orange
  -->

  <div class="toolbar">
    <a href="<?=$baseUrl."/bookstore"?>" class="btn btn-default active">รายการหนังสือ</a>
    <?php if (isset($user)): ?>
      <a href="<?=$baseUrl."/bookstore/history"?>" class="btn btn-default">ประวัติการยืม</a>
    <?php endif; ?>
  </div>

  <table id="fresh-table" class="table">
    <thead>
      <th data-field="name" data-sortable="true">ชื่อหนังสือ</th>
      <th data-field="type" data-sortable="true">ประเภท</th>
      <th data-field="price" data-sortable="true">วันหมดอายุ</th>
      <th data-field="rentday" data-sortable="true">ราคา</th>
      <th data-field="charge" data-sortable="true">ค่าปรับ</th>
      <th data-field="status" data-sortable="true">สถานะ</th>
       <!-- <th data-field="actions" data-formatter="operateFormatter" data-events="operateEvents">Actions</th> -->
    </thead>
    <tbody>

      <?php foreach ($result as $var){
        $i = 0 ;
        ?>
        <?php foreach ($var['books'] as $b):
          $book = Book::findOne($b['book_id']);
        ?>
	       <tr>
        		<td><?=$book['name']?></td>
        		<td><?=$book['type']?></td>
        		<td><?=$b['end_date']?></td>
        		<td><?=$b['price']?></td>
            <td><?=$b['charge']?></td>
        		<td>
              <?php if ($b['status']=="ยกเลิกการจัดส่ง" || $b['status']=="ถึงกำหนดคืน"): ?>
                <b class="text-danger">
                  <?=$b['status']?>
                </b>
              <?php elseif ($b['status']=="จัดส่งแล้ว"): ?>
                <b class="text-success">
                  <?=$b['status']?>
                </b>
              <?php elseif ($b['status']=="กำลังจัดส่ง"): ?>
                <b class="text-success">
                  <?=$b['status']?> <a href="<?=$baseUrl."/bookstore/cancel?id=".$var['_id']."&book_ar=".$i?>" class="text-danger">ยกเลิก</a>
                </b>
                <?php $i++ ?>
              <?php else: ?>
                <?=$b['status']?>
              <?php endif; ?>

            </td>
  	   </tr>
       <?php endforeach; ?>
   <?php }?>

    </tbody>
  </table>
</div>
