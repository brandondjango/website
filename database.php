<?php


  //connect to database
$servername = "localhost";
$username = "root";
$password = "password";
$brandon = "brandon";
//Sanity random variable
//echo rand(1,100);

// Create connection
$conn = mysqli_connect($servername, $username);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "\n");
}
else{echo "Score: Connection Successful\n";}

//Create database for email contacts

/*
$sql = "CREATE DATABASE contacts";
if (mysqli_query($conn, $sql)) {
    echo "\nDatabase created successfully\n";
} else {
    echo "\nError creating database: " . mysqli_error($conn) . "\n";
}
mysqli_select_db($conn, "contacts") or die(mysql_error());

$result = mysqli_select_db($conn, "contacts");
if($result){echo "\nselection successful\n";}
else{echo "\nselection failed\n";}*/

//Create table cantactinfo within contacts

/*
mysqli_query($conn, "CREATE TABLE contactinfo(
id INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(id),
 firstname VARCHAR(30),
 lastname VARCHAR(30),
 email VARCHAR(30))")
 or die(mysql_error());*/


//select database to work with
 mysqli_select_db($conn, "contacts") or die(mysql_error());

/////////////////////////////
//inserts from database.html
////////////////////////////
 //holder variable for query



 $tester1 = $_POST['dbfirstname'];
 $tester2 =  $_POST['dblastname'];
$tester3 =  $_POST['dbemail'];
$testCommand = $_POST['dbcommand'];

//if all entries are blank, do not input
if(rtrim($tester1) != "" && rtrim($tester2) != "" && rtrim($tester3) != ""){

 $sql = "INSERT INTO contactinfo(firstname, lastname, email) VALUES('$tester1', '$tester2', '$tester3')";
 $result = mysqli_query($conn, $sql) or die(mysql_error());
 if($result){echo "\nquery successful";}
 else{echo "\nquery unsuccessful";
 }
}
else{
echo "<li>Error, not all entries filled, return to database entry</li>";
}


echo "Printed contacts Database:";
//prints only the contactinfo table from contacts database
printcontact_db($conn);


//execute Database command
command_db($conn, $testCommand);

//link back to database.html
echo "<li><a href='database.html'>Return to Database.html</a></li>";

//print database within table


///////////////////////////////////////////////////////////////
//functions
///////////////////////////////////////////////////////////////
//print contactinfo table from contact database database
function printcontact_db(mysqli $conn){
  //prints arrays from contact info
  $query = "SELECT * FROM contactinfo";
  $result = mysqli_query($conn, $query) or die(mysql_error());

  echo "<table border='1'>
  <tr>
  <th>Firstname</th>
  <th>Lastname</th>
  <th>Email</th>
  </tr>";
  echo "<li>printdb</li>";
  while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>" . $row['firstname'] . "</td>";
    echo "<td>" . $row['lastname'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "</tr>";
  	//echo $row['firstname']. " - ". $row['lastname']. " - ". $row['email'] ;

  }
  echo "<li><a href='database.html'>Return to Database.html</a></li>";

}

//execute command from database.html function

function command_db(mysqli $conn, $testCommand){
  //prints arrays from contact info
  //echo "command_db";
  $query = $testCommand;
  $result = mysqli_query($conn, $query) or die(mysql_error());

  echo "Command completed";
  /* Uncomment if you want some printing involved
  echo "<table border='1'>
  <tr>
  <th>Firstname</th>
  <th>Lastname</th>
  <th>Email</th>
  </tr>";
  while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>" . $row['firstname'] . "</td>";
    echo "<td>" . $row['lastname'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "</tr>";
  	//echo $row['firstname']. " - ". $row['lastname']. " - ". $row['email'] ;
  	//echo "<br />";

  }
  echo "<li>commanddb</li>";

  /////////////////////////////////end functions*/
}

mysqli_close($conn);
?>
