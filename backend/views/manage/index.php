<?php
$this->title = 'Armabook  Manage ';
$baseUrl=\Yii::getAlias('@web');
?>

<a href="<?= $baseUrl."/"?>"><button type="submit" class="btn btn-primary">หน้าแรก</button></a>
<a href="<?= $baseUrl."/manage/booklist"?>"><button type="submit" class="btn btn-primary">รายการหนังสือ</button></a>
<a href="<?= $baseUrl."/manage/customerlist"?>"><button type="submit" class="btn btn-primary">รายการลูกค้า</button></a>
<a href="<?= $baseUrl."/manage/bookhistory"?>"><button type="submit" class="btn btn-primary">ประวัติการยืม</button></a>
<div class="jumbotron m-2">
  <h1 class="display-4">ยินดีต้อนรับอาม่า</h1>
  <p class="lead">เวอร์ชั่น 0.0.0.0.0.0.1 สำหรับอาม่า</p>
</div>

<div class="row mt-2">
  <div class="col">
    <div class="card text-white text-center bg-primary mb-3">
      <div class="card-body">
        <h4 class="card-title"><?=$book?></h4>
        <p class="card-text">จำนวนหนังสือ</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card text-white text-center bg-success mb-3">
      <div class="card-body">
        <h4 class="card-title"><?=$rent?></h4>
        <p class="card-text">จำนวนครั้งที่ออเดอร์</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card text-white text-center bg-danger mb-3">
      <div class="card-body">
        <h4 class="card-title"><?=$customer?></h4>
        <p class="card-text">จำนวนลูกค้า</p>
      </div>
    </div>
  </div>
</div>
