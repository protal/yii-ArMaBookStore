<?php
$this->title = 'Armabook  Manage ';
$baseUrl=\Yii::getAlias('@web');
?>

  							
<a href="<?= $baseUrl."/manage/booklist"?>"><button type="submit" class="btn btn-primary">รายการหนังสือ</button></a>
<a href="<?= $baseUrl."/manage/customerlist"?>"><button type="submit" class="btn btn-primary">รายการลูกค้า</button></a>
<a href="<?= $baseUrl."/manage/bookhistory"?>"><button type="submit" class="btn btn-primary">ประวัติการยืม</button></a>

