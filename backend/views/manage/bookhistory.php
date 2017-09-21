<?php
use backend\models\Book;
use backend\models\Customer;
use backend\models\Rent;
$this->title = 'BookStore Log File';
$baseUrl=\Yii::getAlias('@web');
use yii\web\View;
?>


<td><a href="<?= $baseUrl."/manage"?>"><button type="button" class="btn btn-info">กลับ</button></a></td>
<br>
<br>
<table border="1" class="table table">

	<tr>
		<th  data-field="name" data-sortable="true">ชื่อผู้ยืม</th>
		<th  data-field="" data-sortable="true">รายการหนังสือ</th>
		<th  data-field="" data-sortable="true">สถานะ</th>
  </tr>
      <?php foreach ($result as $var){
				$i = 0;
				$c = Customer::findOne($var['customer']);
			?>
				<?php
	  		foreach ($var['books'] as $b)
	  		{
	  			$book = Book::findOne($b['book_id']);
					?>
					<tr>
						<?php if ($i==0): ?>
							<td rowspan="<?=sizeof($var['books'])?>">
								<?=$c['firstname']?> <?=$c['lastname']?>
							</td>
						<?php endif; ?>
						<td><?=$book['name']?></td>
						<td>

				  			<select>
				  				<option value="กำลังจัดส่ง" <?=($b['status']=="กำลังจัดส่ง")?"selected='selected'":""?>>กำลังจัดส่ง</option>
				  				<option value="จัดส่งแล้ว" <?=($b['status']=="จัดส่งแล้ว")?"selected='selected'":""?>>จัดส่งแล้ว</option>
				  				<option value="ถึงกำหนดคืน" <?=($b['status']=="ถึงกำหนดคืน")?"selected='selected'":""?>>ถึงกำหนดคืน</option>
									<option value="คืนแล้ว" <?=($b['status']=="คืนแล้ว")?"selected='selected'":""?>>คืนแล้ว</option>
				  				<option value="คืนช้าเสียค่าปรับ" <?=($b['status']=="คืนช้าเสียค่าปรับ")?"selected='selected'":""?>>คืนช้าเสียค่าปรับ</option>
								<option value="ยกเลิกการจัดส่ง" <?=($b['status']=="ยกเลิกการจัดส่ง")?"selected='selected'":""?>>ยกเลิกการจัดส่ง</option>
							</select>
						</td>
					</tr>
					<?php
					$i++;
	  		}
	  		?>
   <?php }?>
</table>
