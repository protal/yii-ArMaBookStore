<?php
$this->title = 'ArmaBook List';
$baseUrl=\Yii::getAlias('@web');
?>


<table border="1" class="table table-striped">
                        
	<tr>    
		<th data-field="firstname" data-sortable="true">ชื่อ </th>
		<th data-field="lastname" data-sortable="true">นามสกุล</th>
		<th data-field="phone" data-sortable="true">เบอโทรศัพท์</th>
		<th data-field="email" data-sortable="true">อีเมล์</th>
		<th data-field="address" data-sortable="true">ที่อยู่</th>
	
    </tr>
	
	<?php foreach ($result as $var){?>
	<tr>
  		<td><?=$var['firstname']?></td>
  		<td><?=$var['firstname']?></td>
  		<td><?=$var['phone']?></td>
  		<td><?=$var['email']?></td>
  		<td><?=$var['address']?></td>
  		
  		<td><a href="<?= $baseUrl."/manage/customeredit?id=".$var['_id']?>"><button type="button" class="btn btn-warning">แก้ไข</button></a></td>
  		<td><a href="<?= $baseUrl."/manage/customerdelete?id=".$var['_id']?>"><button type="button" class="btn btn-danger">ลบ</button></a></td>
  		
  	</tr>
   <?php }?>
  	
</table>


<td><a href="<?= $baseUrl."/manage/newbook"?>"><button type="button" class="btn btn-info">เพิ่มหนังสือ</button></a></td>

