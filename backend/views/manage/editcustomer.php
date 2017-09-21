<?php
$this->title = 'ArmaBook Add New Books';
$baseUrl=\Yii::getAlias('@web');
?>
<div class="container h-100 d-flex justify-content-center">
<form action="<?=$baseUrl."/manage/customersave"?>" method="get">

  <input type="hidden" name="id" value="<?=$model['_id']?>">

  <div class="card text-white bg-warning mb-3" style="width: 30rem;">
    <div class="card-header"> เพิ่มสมาชิก </div>
    <div class="card-body">

  		<div class="col-xs-3">
    		<label for="ex1">ชื่อ</label>
    		<input type="text" class="form-control" name="firstname" value="<?=$model['firstname']?>">
  		</div>

  		<div class="col-xs-3">
    		<label for="ex2">นามสกุล</label>
    		<input type="text" class="form-control" name="lastname" value="<?=$model['lastname']?>">
  		</div>

		<div class="col-xs-3">
    		<label>เบอโทรศัพท์</label>
    		<input type="text" class="form-control" name="phone" value="<?=$model['phone']?>">
  		</div>

		<div class="col-xs-3">
    		<label>อีเมลล์</label>
    		<input type="text" class="form-control" name="email"  value="<?=$model['email']?>">
  		</div>

		<div class="col-xs-3">
    		<label>รหัสผ่าน</label>
    		<input type="text" class="form-control" name="password" value="<?=$model['password']?>" >
  		</div>

		<div class="col-xs-3">
    		<label>ที่อยู่</label>
    		<input type="text" class="form-control" name="address"  value="<?=$model['address']?>">
  		</div>
      <br>

<center><button type="submit" class="btn btn-success">ยืนยัน</button></center>
</form>
</div>
</div>
