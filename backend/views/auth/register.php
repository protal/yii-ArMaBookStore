<?php
$baseUrl=\Yii::getAlias('@web');
 ?>
 <!DOCTYPE html>
 <html>

 <head>
   <meta charset="utf-8">
   <title>Register</title>
 </head>

 <body>
   <form action="<?=$baseUrl."/auth/registersave"?>">
     <div class="form-group">
       <label for="inputEmail3" class="col-sm-2 control-label">FirstName :</label>
       <div class="col-sm-6">
         <input type="text" class="form-control" name="firstname" placeholder="FirstName">
       </div>
     </div>
     <div class="form-group">
       <label for="inputPassword3" class="col-sm-2 control-label">LastName :</label>
       <div class="col-sm-6">
         <input type="text" class="form-control" name="lastname" placeholder="LastName">
       </div>
     </div>
     <div class="form-group">
       <label for="inputPassword3" class="col-sm-2 control-label">Phone :</label>
       <div class="col-sm-6">
         <input type="text" class="form-control" name="phone" placeholder="088-888-888-8">
       </div>
     </div>
     <div class="form-group">
       <label for="inputPassword3" class="col-sm-2 control-label">Email :</label>
       <div class="col-sm-6">
         <input type="email" class="form-control" name="email" placeholder="Frist.Name@example.com">
       </div>
     </div>
     <div class="form-group">
       <label for="inputPassword3" class="col-sm-2 control-label">Password :</label>
       <div class="col-sm-6">
         <input type="password" class="form-control" name="password" placeholder="6-8 Charecter">
       </div>
     </div>
     <div class="form-group">
       <label for="inputPassword3" class="col-sm-2 control-label">Address :</label>
       <div class="col-sm-6">
         <textarea class="form-control" name="address" placeholder="กรอกข้อมูลที่อยู่โดยละเอียดน่ะค่ะ" rows="3"></textarea>
       </div>
     </div>
     <div class="col-md-12 col-md-offset-4">
       <button type="submit" class="btn btn-primary" name="submit">ยืนยัน</button>
     </div>
   </form>
 </body>

 </html>
