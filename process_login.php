<?php
//start the session
session_start();
//file to check the passwords
$file = "usernames.txt";

/////////////////////////////////////////
//start checking the validity of password
/////////////////////////////////////////

//break username and password line by line
$parts = new SplFileObject($file);

//username and password
$userpasswordstring = $_POST['username'] . ":" . $_POST['password'];

//begin testing the passwords and usernames
foreach ($parts as $line) {

  //condition to test for validity
  if(strcmp(trim($userpasswordstring), trim($line)) == 0){
    $_SESSION["login"] = true;
    $_SESSION["error"] = "";
    header("Location: index.php"); //redirect to homepage
    exit();
    break;
  }//end if

}//end for

//if password not found, error message set
$_SESSION["error"] = "Your id or password is incorrect. Please try again";

//redirect back to login
header("Location: index.php");
exit();

//EOF
 ?>
