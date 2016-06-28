<?php
//start the session
session_start();

//grab username and password info from form in index.php
$username = rtrim($_POST['username']);
$password = rtrim($_POST['password']);


if (!isset($_SESSION["login"])){
  $_SESSION["login"] = "Guest";
}
$_SESSION["login_error"] = "";
$_SESSION["register_error"]= "";


///////////////////////////////////////////////////
//Logout
//////////////////////////////////////////////////

if ($_POST['action'] == 'Logout'){
  $_SESSION["login"] = "Guest";
}

///////////////////////////////////////////////////
//Login
///////////////////////////////////////////////////
if ($_POST['action'] == 'Login'){

  if($username == "" && $password == "" ){
  $_SESSION["register_error"]= "Both fields must contain characters.";
  header( 'Location: index.php' ) ;
}
  //connect to database
$servername = "localhost";
$sql_username = "root";

// Create connection
$conn = mysqli_connect($servername, $sql_username);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "\n");
}
else{echo "Score: Connection Successful\n";}

  mysqli_select_db($conn, "usernames");
  $checkuser_query = "SELECT * FROM `usernames_passwords` WHERE username='" . $username . "'";
  //echo $checkuser_query;
  echo "elements username";
   $checkuser = mysqli_query($conn, $checkuser_query);
    while($row = mysqli_fetch_array($checkuser)){
     if($row['password'] == $password){
       echo "login succesful";
       $_SESSION["login"] = $username;
       $_SESSION["login_error"] = "";
       $_SESSION["register_error"]= "";
       break;
     }//if

   }//while



}//end login if




///////////////////////////////////////////////
//Register new user, create a database for them
///////////////////////////////////////////////
if ($_POST['action'] == 'Register' && $username != "" && $password) {

  //connect to database
  $servername = "localhost";
  $sql_username = "root";

  // Create connection
  $conn = mysqli_connect($servername, $sql_username);

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "\n");
  }
  else{echo "Score: Connection Successful\n";}

  //Legacy code
  //Create musicplayingdatabase for users
  /*
  $sql = "CREATE DATABASE userplaylists";
  if (mysqli_query($conn, $sql)) {
    echo "\nDatabase created successfully\n";
  } else {
    echo "\nError creating database: " . mysqli_error($conn) . "\n";
  }

  $sql = "CREATE DATABASE usernames";
  if (mysqli_query($conn, $sql)) {
      echo "\nDatabase created successfully\n";
    } else {
    echo "\nError creating database: " . mysqli_error($conn) . "\n";
  }
  */

  //select the usernames database for music
  mysqli_select_db($conn, "usernames");

  //create table for usernames and passwords
  //only showing this code tr prove it was done
  //legacy code
  //commented out after inital setting
  /*
  $userquery = "CREATE TABLE usernames_passwords(
  id INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY(id),
  username VARCHAR(60),
  password VARCHAR(60))";
  $result = mysqli_query($conn, $userquery) or die(mysql_error());
  if($result){echo "\ncreate table usernames_passwords successful";}
  else{echo "\ncreate table usernames_passwords unsuccessful";}*/


  $checkuser_query = "SELECT * FROM `usernames_passwords` WHERE username='" . $username . "'";
  //echo $checkuser_query;
  $checkuser = mysqli_query($conn, $checkuser_query);
  while($row = mysqli_fetch_array($checkuser)){
   if($row['username'] == $username){
     echo "register unsuccessful";
     $_SESSION["register_error"] = "Username already exists";
     header( 'Location: index.php' ) ;
     break;
   }

  }

  //insert the new username and password in the database for the new user
  //create table for the new users music
  if($_SESSION["register_error"] == ""){
    mysqli_select_db($conn, "usernames");
    $userquery = "INSERT INTO usernames_passwords(username, password) VALUES('$username', '$password')";
    $result = mysqli_query($conn, $userquery) or die(mysql_error());

    mysqli_select_db($conn, "userplaylists") or die(mysql_error());
    $userquery = "CREATE TABLE " . $username . "playlist(
    id INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(id),
     videos VARCHAR(60))";
     $result = mysqli_query($conn, $userquery) or die(mysql_error());
     $_SESSION["register_error"] = "Registration successful!";
       $_SESSION["login"] = $username;
     header( 'Location: index.php' ) ;

    }




  }//end register if

//Else in the case both fields are not entered
else{
   if($_POST['action'] != 'Login' && $_POST['action'] != 'Logout'){
   $_SESSION["register_error"]= "Both fields must contain characters.";
   header( 'Location: index.php' ) ;
 }

}//end else


header( 'Location: index.php' ) ;

 ?>
