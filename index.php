<?php

$old_user="";

session_start();

if (isset($_POST['username']) && isset($_POST['password'])){
  if ($_POST['username'] == "Minda"  &&   $_POST['password'] == "slaptas") {

    $_SESSION['user']['username'] = $_POST['username'];
    $_SESSION['user']['level'] = "admin";


 
    } else {
      $error = "Wrong username or password";
    }


} else if (isset($_POST['submit'])) {
  $error = "No login data";
}



if(isset($_GET['logout'])) {
  session_destroy();
}


// padaryti kad vartotojas isisaugotu i cokie














if(isset($_SESSION ['user'])) {

  $vardas = $_SESSION['user']['username'];
  include "view/main.php";

} else {
  include "view/login.php";

}

