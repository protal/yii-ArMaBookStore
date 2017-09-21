<?php
$this->title = 'ArmaBook Add New Customer';
$baseUrl=\Yii::getAlias('@web');
?>
<div class="container h-100 d-flex justify-content-center">
<form action="<?=$baseUrl."/manage/customersave"?>">


  <div class="card text-white bg-info " style="width: 30rem;">
    <div class="card-header"> เพิ่มสมาชิก </div>
    <div class="card-body">
  
  		<div class="col-md-8">
    		<label for="ex1">ชื่อ</label>
    		<input type="text" class="form-control" name="firstname">
  		</div>

  		<div class="col-md-8">
    		<label for="ex2">นามสกุล</label>
    		<input type="text" class="form-control" name="lastname">
  		</div>

		<div class="col-md-8">
    		<label>เบอโทรศัพท์</label>
    		<input type="text" class="form-control" name="phone">
  		</div>

		<div class="col-md-8">
    		<label>อีเมลล์</label>
    		<input type="text" class="form-control" name="email" >
  		</div>

		<div class="col-md-8">
    		<label>รหัสผ่าน</label>
    		<input type="text" class="form-control" name="password" >
  		</div>

		<div class="col-md-8">
    		<label>ที่อยู่</label>
    		<input type="text" class="form-control" name="address" >
  		</div>
<br>

<center><button type="submit"  class="btn btn-danger">ยืนยัน</button></center>
</form>
</div>
</div>
</div>
