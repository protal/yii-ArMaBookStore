<?php
$this->title = 'BookStore Log File';
$baseUrl=\Yii::getAlias('@web');
use yii\web\View;
?>
<table border="1" class="table table-striped">

	<tr>
		<th  data-field="name" data-sortable="true">ชื่อผู้ยืม</th>
		<th  data-field="" data-sortable="true">รายการหนังสือ</th>
		<th  data-field="" data-sortable="true">สถานะ</th>
    </tr>


      </td>
      <td>1</td>
  		<td>1</td>
  		<td>
  			<select>
  				<option value="กำลังจัดส่ง">กำลังจัดส่ง</option>
  				<option value="จัดส่งแล้ว">จัดส่งแล้ว</option>
  				<option value="ถึงกำหนดคืน">ถึงกำหนดคืน</option>
					<option value="คืนแล้ว">คืนแล้ว</option>
  				<option value="คืนช้าเสียค่าปรับ">คืนช้าเสียค่าปรับ</option>
				<option value="ยกเลิกการจัดส่ง">ยกเลิกการจัดส่ง</option>
			</select>
		</td>
  	</tr>
</table>

<td><a href="<?= $baseUrl."/manage"?>"><button type="button" class="btn btn-info">กลับ</button></a></td>
