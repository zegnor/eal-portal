<?php
function checkLogin() {
   $btn = $_POST['login-bt'];
   
  
   
   /*if (isset($btn) && !empty($usr) && !empty($psw)) {
      if ($usr == "student" && $psw == "1234") {
         $_SESSION["isStudentIn"] = true;
         header('location: index.php');
      } else {
         return false;
      }
   } else {
      return false;
   }
   if (isset($btn) && !empty($usr) && !empty($psw)) {
      if ($usr == "teacher" && $psw == "2345") {
         $_SESSION["isTeacherIn"] = true;
         header('location: index.php');
      } else {
         return false;
      }
   } else {
      return false;
   }*/


   if (isset($btn)) {

      if(isset($_POST['username'])) {
         $usr = $_POST['username'];
      }
      if(isset($_POST['password'])) {
         $psw = $_POST['password'];
      }

      if (($usr == "student") && ($psw == "1234")) {
         $_SESSION["isStudentIn"] = true;
         header('location: index.php');
      } elseif (($usr == "teacher") && ($psw == "2345")) {
         $_SESSION["isTeacherIn"] = true;
         header('location: index.php');
      } else {
         return false;
      }
   }
}

/*session_start(); // Starting Session
$msg = '';

if (isset($_POST['login-bt']) && !empty($_POST['username']) && !empty($_POST['password'])) {
         
   if ($_POST['username'] == 'bence' && $_POST['password'] == '1234') {

      $_SESSION['valid'] = true;
      $_SESSION['username'] = 'bence';
                  
         echo 'Valid username and password';

   } else {
      $msg = 'Wrong username or password';
   }
}*/
   
/*$_SESSION['login_user']=$username; // Initializing Session
header("location: profile.php"); // Redirecting To Other Page*/
   
   /*} else {
      $error = "Wrong username or password";
   }
}
   }*/
?>