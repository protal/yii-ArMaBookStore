<?php
$this->title = 'ArmaBook List';
$baseUrl=\Yii::getAlias('@web');
?>


<div class="search">
  <form class="" action="" method="get">
    <input type="text" name="search" placeholder="Search" value="<?php echo $search?>" />
     <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-search" aria-hidden="true"></i></button>
    </div>
  </form>


<br>


<table border="1" class="table table-striped">
                        
	<tr>    
		<th data-field="firstname" data-sortable="true">ชื่อ </th>
		<th data-field="lastname" data-sortable="true">นามสกุล</th>
		<th data-field="phone" data-sortable="true">เบอโทรศัพท์</th>
		<th data-field="email" data-sortable="true">อีเมล์</th>
		<th data-field="address" data-sortable="true">ที่อยู่</th>
		<th data-field="total" data-sortable="true">แก้ไข</th>
		<th data-field="total" data-sortable="true">ลบ</th>
	
    </tr>
	
	<?php foreach ($result as $var){?>
	<tr>
  		<td><?=$var['firstname']?></td>
  		<td><?=$var['lastname']?></td>
  		<td><?=$var['phone']?></td>
  		<td><?=$var['email']?></td>
  		<td><?=$var['address']?></td>
  		
  		<td><a href="<?= $baseUrl."/manage/editcustomer?id=".$var['_id']?>"><button type="button" class="btn btn-warning">แก้ไข</button></a></td>
  		<td><a href="<?= $baseUrl."/manage/customerdelete?id=".$var['_id']?>"><button type="button" class="btn btn-danger">ลบ</button></a></td>
  		
  	</tr>
   <?php }?>
  	
</table>


<td><a href="<?= $baseUrl."/manage/newcustomer"?>"><button type="button" class="btn btn-info">เพิ่ม customer</button></a></td>
<td><a href="<?= $baseUrl."/manage"?>"><button type="button" class="btn btn-info">กลับ</button></a></td>
