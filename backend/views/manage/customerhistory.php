<?php
$this->title = 'Customer Log File';
$baseUrl=\Yii::getAlias('@web');
use yii\web\View;
?>
<table border="1" class="table table-striped">

	<tr>
		<th  data-field="firstname" data-sortable="true">ชื่อผู้ยืม</th>
		<th  data-field="lastname" data-sortable="true">นามสกุลผู้ยืม</th>
		<th  data-field="" data-sortable="true">สถานะ</th>
		
    </tr>

	
	<?php foreach ($result as $var){?>
	<tr>
  		<td><?=$var['firstname']?></td>
  		<td><?=$var['lastname']?></td>
  		
  		<td>
  			<select>
  				<option value="กำลังจัดส่ง">กำลังจัดส่ง</option>
  				<option value="จัดส่งแล้ว">จัดส่งแล้ว</option>
  				<option value="ใกล้ถึงกำหนดคืน">ใกล้ถึงกำหนดคืน</option>
  				<option value="คืนช้าเสียค่าปรับ">คืนช้าเสียค่าปรับ</option>
				<option value="ยกเลิกการจัดส่ง">ยกเลิกการจัดส่ง</option>
			</select> 
		</td>
  		
  	</tr>
   <?php }?>
  

</table>