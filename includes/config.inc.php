<?php
  session_start();
  //$servername = "hms.test"; 
  //change this  accordingly
  $dBUsername = "8tORhkIRdT";
  $dBPassword = "BFuG1RXoBm";
  $dBName = "8tORhkIRdT";
  $host = "remotemysql.com";
 // session_start();
  $conn=mysqli_connect(  $host,$dBUsername, $dBPassword, $dBName);

  if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
  }
?>
