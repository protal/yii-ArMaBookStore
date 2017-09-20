<?php
$this->title = 'ArmaBook Add New Books';
$baseUrl=\Yii::getAlias('@web');
?>

<form action="<?=$baseUrl."/manage/customersave"?>" method="get">
  	
  <input type="hidden" name="id" value="<?=$model['_id']?>">
  
  <div class="form-group row">
  		<div class="col-xs-3">
    		<label for="ex1">ชื่อ</label>
    		<input type="text" class="form-control" name="firstname" value="<?=$model['firstname']?>">
  		</div>
  		<div class="col-xs-3">
    		<label for="ex2">นามสกุล</label>
    		<input type="text" class="form-control" name="lastname" value="<?=$model['lastname']?>">
  		</div>
  </div>

 	<div class="form-group row" >
		<div class="col-xs-3">
    		<label>เบอโทรศัพท์</label>
    		<input type="text" class="form-control" name="phone" value="<?=$model['phone']?>">
  		</div>
  </div>
   
    <div class="form-group row" >
		<div class="col-xs-3">
    		<label>อีเมลล์</label>
    		<input type="text" class="form-control" name="email"  value="<?=$model['email']?>">
  		</div>
  </div>
  <div class="form-group row" >
		<div class="col-xs-3">
    		<label>รหัสผ่าน</label>
    		<input type="text" class="form-control" name="password" value="<?=$model['password']?>" >
  		</div>
  </div>
    <div class="form-group row" >
		<div class="col-xs-3">
    		<label>ที่อยู่</label>
    		<input type="text" class="form-control" name="address"  value="<?=$model['address']?>">
  		</div>
  </div>
   
  
  
<button type="submit" class="btn btn-primary">ยืนยัน</button>
</form>