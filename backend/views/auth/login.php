<?php


 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Login</title>
   </head>
   <body>
     <div class="container">
       <form class="form-horizontal" role="form" method="GET" action="">
         <div class="row">
           <div class="col-md-3"></div>
           <div class="col-md-6">
             <h2>Login</h2>
             <hr>
           </div>
         </div>
         <div class="row">
           <div class="col-md-3"></div>
           <div class="col-md-6">
             <div class="form-group has-danger">
               <label class="sr-only" for="email">E-Mail</label>
               <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                 <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                 <input type="text" name="email" class="form-control" id="email" placeholder="you@example.com" required autofocus>
               </div>
             </div>
           </div>
         </div>
         <div class="row">
           <div class="col-md-3"></div>
           <div class="col-md-6">
             <div class="form-group">
               <label class="sr-only" for="password">Password</label>
               <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                 <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                 <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
               </div>
             </div>
           </div>
           <div class="col-md-3">
             <div class="form-control-feedback">
               <span class="text-danger align-middle">
                           <!-- Put password error message here -->
                           </span>
             </div>
           </div>
         </div>

         <div class="row" style="padding-top: 1rem">
           <div class="col-md-3"></div>
           <div class="col-md-6">
             <button type="submit" class="btn btn-success"><i class="fa fa-sign-in"></i> Login</button>
             <a class="btn btn-link" href="/auth/register"> Register </a>
           </div>
         </div>
       </form>
     </div>
   </body>
 </html>
