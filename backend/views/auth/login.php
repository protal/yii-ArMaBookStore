<?php
$baseUrl=\Yii::getAlias('@web');

 ?>

 <div class="container h-100 d-flex justify-content-center">
       <form role="form" method="post" action="<?=$baseUrl."/auth/loginaction"?>">
             <h2>Login</h2>
             <hr>
             <div class="form-group">
               <label class="sr-only" for="email">E-Mail</label>
               <div class="input-group">
                 <input type="text" name="email" class="form-control" id="email" placeholder="you@example.com" required autofocus>
               </div>
             </div>
             <div class="form-group">
               <label class="sr-only" for="password">Password</label>
               <div class="input-group">
                 <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
               </div>
             </div>

             <button type="submit" class="btn btn-success"><i class="fa fa-sign-in"></i> Login</button>
             <a class="btn btn-link" href="<?=$baseUrl."/auth/register"?>"> Register </a>
       </form>
 </div>
