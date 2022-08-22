<?php

/*1- first: on in your web site page phpmyadmin.com .
2-seconde  enter (NEW ) TO DO DATABASE NAME IS "phptest" NEKEST   name table IS "contacts".
3-  CREATE THREE column (ID ,NUME,NUM) "ID": IS INT PRUMARY KEY -- "NUME": IS VARCHARE  -- "NUM": IS INT  */
/*
$data=$_GET["x"];

$host = "localhost";
$username = "root";
$password = "";

try 
{
    $conn = new PDO("mysql:host=$host;dbname=dir_db", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

if(isset($_GET['save_contact']))
{	//print_r($_GET);
	
	
	$sql = "INSERT INTO dir(id,direction) VALUES( '','".addslashes($data)."')";
	if($conn->query($sql)==TRUE){
	echo"successfully";}
	else{ echo"error :" . $sql . "<br>" .$conn->error; }
	$conn->close();

}*/
$data=$_GET["x"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dir_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO dir (direction)
VALUES ( '$data')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


