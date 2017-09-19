<?php
$this->title = 'ArmaBook Add New Customer';
$baseUrl=\Yii::getAlias('@web');
?>

<form action="<?=$baseUrl."/customer/customersave"?>">
  	  
  	
   
   	<div class="form-group row">
  		<div class="col-xs-3">
    		<label for="ex1">ชื่อ</label>
    		<input type="text" class="form-control" name="firstname">
  		</div>
  		<div class="col-xs-3">
    		<label for="ex2">นามสกุล</label>
    		<input type="text" class="form-control" name="lastname">
  		</div>
  </div>

 	<div class="form-group row" >
		<div class="col-xs-3">
    		<label>เบอโทรศัพท์</label>
    		<input type="text" class="form-control" name="phone">
  		</div>
  </div>
   
    <div class="form-group row" >
		<div class="col-xs-3">
    		<label>อีเมลล์</label>
    		<input type="text" class="form-control" name="email" >
  		</div>
  </div>
  <div class="form-group row" >
		<div class="col-xs-3">
    		<label>รหัสผ่าน</label>
    		<input type="text" class="form-control" name="password" >
  		</div>
  </div>
    <div class="form-group row" >
		<div class="col-xs-3">
    		<label>ที่อยู่</label>
    		<input type="text" class="form-control" name="address" >
  		</div>
  </div>
   
   
<button type="submit" class="btn btn-primary">ยืนยัน</button>
</form>