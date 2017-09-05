<!DOCTYPE html>
<html>
   <head>
      <title>Login page</title>
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
   </head>
   <body>
         <div class="container">
           
             <H1>Please login</H1>
        
          
         
              <div class="row">
                  <div class="col-4">
                  <?php 
                      if(isset($error)){
                        echo '<div class="alert alert-danger">' . $error. '</div>';
                      }
                      ?>

                   <form method="POST">
                      <div class="form-group">
                      <label for="username">Username</label>
                       <input name="username" type="text" class="form-control" id="username" >
                  

                        </div>

                        <div class="form-group">
                        <label for="password">Password</label>
                        <input name="password" type="password" class="form-control" id="password" >
                        </div>

  
                        <button type="submit" class="btn btn-primary">Login</button>
                   </form>
            
                  </div>
             
                  <div class="col">
                    <pre><?php


                      echo "POST:";
                      print_r($_POST); 

                      echo "SESSION:";
                      print_r($_SESSION); 


                      echo "COOKIE:";
                      print_r($_COOKIE); 







                    ?></pre>
                  </div>
              </div>
             </div>
           
        
           </div>

   </body>
   
</html>


