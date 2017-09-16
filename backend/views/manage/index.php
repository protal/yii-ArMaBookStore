<?php
$this->title = 'Armabook  Manage ';
$baseUrl=\Yii::getAlias('@web');
?>
<table border="1" class="table table-striped">
                        
                    	<tr>
                            <th data-field="name" data-sortable="true">BookName</th>
                        	<th data-field="total" data-sortable="true">BookTotal</th>
                        	
                        	
                        </tr>
                                           
                        
                           <?php foreach ($result as $var){?>
  						<tr>
  							<td>
                  				<!-- Split button -->
                  				<div class="btn-group">
                    			<button type="button" class="btn btn-default"> <?=$var['name']?></button>
                    			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      			<span class="caret"></span>
                      			<span class="sr-only">Toggle Dropdown</span>
                    			</button>
                   				 	<ul class="dropdown-menu" role="menu">
                   				 		<li><a href="#">ประเภท : <?=$var['type']?></a></li>
                      					<li><a href="#">ราคา : <?=$var['price']?></a></li>
                      					
                    				</ul>
                  				</div>
                			</td>
  							
  							<div class="form-group row">
   							<td width="150px">
  							<input class="form-control" value="<?=$var['total']?>">
  							</td>
  						</div>
  						</tr>
   							<?php }?>

</table>
	
	
		<div class="form-group row">
  			<div class="col-xs-2">
    			<label for="ex1">จำนวนที่ยืม</label>
    			<input class="form-control" id="ex1" type="text">
  			</div>
  		</div>
		
			
		<div class="form-group row">
  			<div class="col-xs-2">
    			<label for="ex1">ราคาหนังสือ</label>
    			<input class="form-control" id="ex1" type="text">
  			</div>
  		</div>
  							
<button type="submit" class="btn btn-primary">ยืม</button>