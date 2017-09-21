<?php
$this->title = 'ArmaBook Add New Books';
$baseUrl=\Yii::getAlias('@web');
?>

<div class="container h-100 d-flex justify-content-center">
<form action="<?=$baseUrl."/manage/booksave"?>" method="get">

  <div class="card  text-white bg-success" style="width: 30rem;">
    <div class="card-header">แก้ไขข้อมูล</div>
    <div class="card-body">


  <input type="hidden" name="id" value="<?=$model['_id']?>">
  <div class="form-group">
<br>
  	<div class="dropdown">
  		<label>ประเภทหนังสือ  :</label>
    	<select name="type" value="<?=$model['type']?>">
  			<option value="การ์ตูน">การ์ตูน</option>
 		 	<option value="นิตยสาร">นิตยสาร </option>
 		 	<option value="วารสาร">วารสาร</option>
 		 	<option value="นวนิยาย">นวนิยาย</option>
 		 	<option value="บันเทิงคดี">บันเทิงคดี</option>
 		 	<option value="สารคดี">สารคดี</option>
 		</select>

  	</div>

  	<br>

  	<div class="form-group" >
      <div class="col-md-8">
    	<label>ชื่อหนังสือ : </label>
    	<input type="text" class="form-control" name="name"  value="<?=$model['name']?>" >
  	</div>

      <div class="col-md-8">
    	<label>เล่มที่  </label>
    	<input type="text" class="form-control" name="version" value="<?=$model['version']?>" >
  	</div>


  	<div class="col-md-8">
    		<label for="ex1">ราคา</label>
    		<input type="text" class="form-control" name="price" value="<?=$model['price']?>" >
  	</div>
  	<div class="col-md-8">
    		<label for="ex2">ค่าปรับ</label>
    		<input type="text" class="form-control" name="charge" value="<?=$model['charge']?>" >
  	</div>
		<div class="col-md-8">
    		<label>จำนวนวันที่ยืม</label>
    		<input type="text" class="form-control" name="days" value="<?=$model['days']?>" >
  </div>
  </div>
		<div class="col-md-8">
    		<label>จำนวนหนังสือที่เพิ่ม</label>
    		<input type="text" class="form-control" name="total" value="<?=$model['total']?>"  >
  		</div>
<br>

<center><button type="submit" class="btn btn-warning">ยืนยัน</button></center>
</form>

</div>
</div>
</div>
