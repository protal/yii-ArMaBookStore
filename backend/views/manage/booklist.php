<?php
$this->title = 'ArmaBook List';
$baseUrl=\Yii::getAlias('@web');
?>


<table border="1" class="table table-striped">

	<tr>
		<th data-field="name" data-sortable="true">ชื่อหนังสือ </th>
		<th data-field="type" data-sortable="true">ประเภทหนังสือ</th>
		<th data-field="price" data-sortable="true">ราคา</th>
		<th data-field="days" data-sortable="true">จำนวนวันที่ยืม</th>
		<th data-field="charge" data-sortable="true">ค่าปรับ</th>
		<th data-field="total" data-sortable="true">จำนวนหนังสือ</th>
		<th data-field="total" data-sortable="true">แก้ไข</th>
		<th data-field="total" data-sortable="true">ลบ</th>
    </tr>

	<?php foreach ($result as $var){?>
	<tr>
  		<td>
        <?=$var['name']?>
        <?php
          if(isset($var['version'])&&$var['version']!='')
          {
            echo "<span class=\"badge badge-primary\">เล่มที่ ".$var['version']."</span>";
          }
         ?>
      </td>
      <td><?=$var['type']?></td>
  		<td><?=$var['price']?> บาท</td>
  		<td><?=$var['days']?> วัน</td>
  		<td><?=$var['charge']?> บาท</td>
  		<td><?=$var['total']?> เล่ม</td>
  		<td><a href="<?= $baseUrl."/manage/edit?id=".$var['_id']?>"><button type="button" class="btn btn-warning">แก้ไข</button></a></td>
  		<td><a href="<?= $baseUrl."/manage/delete?id=".$var['_id']?>"><button type="button" class="btn btn-danger">ลบ</button></a></td>

  	</tr>
   <?php }?>

</table>


<td><a href="<?= $baseUrl."/manage/newbook"?>"><button type="button" class="btn btn-info">เพิ่มหนังสือ</button></a></td>
