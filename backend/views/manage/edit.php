<?php
$this->title = 'ArmaBook Add New Books';
$baseUrl=\Yii::getAlias('@web');
?>

<form action="<?=$baseUrl."/manage/booksave"?>" method="get">
  	
  <input type="hidden" name="id" value="<?=$model['_id']?>">
  <div class="form-group">
  	
  	<div class="dropdown">
  		<label>ประเภทหนังสือ  :</label>
    	<select name="type">
  			<option value="การ์ตูน">การ์ตูน</option>
 		 	<option value="นิตยสาร">นิตยสาร </option>
 		 	<option value="วารสาร">วารสาร</option>
 		 	
 		</select>
  
  	</div>

  	<br>
  
  	<div class="form-group" >
    	<label>ชื่อหนังสือ : </label>
    	<input type="text" class="form-control" name="name"  value="<?=$model['name']?>" >
  	</div>
   
   	<div class="form-group row">
  		<div class="col-xs-3">
    		<label for="ex1">ราคา</label>
    		<input type="text" class="form-control" name="price" value="<?=$model['price']?>" >
  		</div>
  		<div class="col-xs-3">
    		<label for="ex2">ค่าปรับ</label>
    		<input type="text" class="form-control" name="charge" value="<?=$model['charge']?>" >
  		</div>
  </div>

 	<div class="form-group row" >
		<div class="col-xs-3">
    		<label>จำนวนวันที่ยืม</label>
    		<input type="text" class="form-control" name="days" value="<?=$model['days']?>" >
  		</div>
  </div>
   
    <div class="form-group row" >
		<div class="col-xs-3">
    		<label>จำนวนหนังสือที่เพิ่ม</label>
    		<input type="text" class="form-control" name="total" value="<?=$model['total']?>"  >
  		</div>
  </div>
   
   
<button type="submit" class="btn btn-primary">ยืนยัน</button>
</form>