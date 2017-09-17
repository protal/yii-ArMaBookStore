<?php
$this->title = 'Book History';
$baseUrl=\Yii::getAlias('@web');
?>
<form action="" method="get">
	<div class="row">
		<div class="col-sm-10">
			<input name="search" class="form-control" type="text" >
		</div>
		<div class="col-sm-2">
			<button type="submit" class="form-control btn btn-primary btn-sm">search</button>
		</div>
	</div>
</form>

<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>
<div> <br> </div>

<table border="1">
  <tr>
    <th>#id</th>
    <th>courseID</th>
    <th>CourseName</th>
    
  </tr>
  

</table>

<div> <br> </div>
<div align="right">
<a href="">
<button type="submit" class="form-control btn btn-primary btn-sm"> + สร้าง</button></a>
</div>
