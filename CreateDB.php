<?php
/**
 * Created by PhpStorm.
 * User: monika.pandey
 * Date: 11/12/17
 * Time: 11:15 AM
 */

$servername = "localhost";
$username = "root";
$password = "root";


//Create Conn
$conn = mysql_connect($servername, $username, $password);

//Check Conn
if (!$conn) {
    die("Could not connect: " . mysql_error());
}
echo "Connected successfully\n";

$sql = "CREATE DATABASE TUTORIALS";
$retval = mysql_query($sql, $conn);
if (!$retval) {
    die("Could not create database: " . mysql_error());
}

echo "Database TUTORIAL created successfully\n";

mysql_close($conn);


//<<<<<<<<<<<<< WITH MYSQLi >>>>>>>>>>
////Create Conn
//$conn = new mysqli($servername, $username, $password);
//
////Check Conn
//if ($conn->connect_error) {
////    die("Connection failed: " . $conn->connect_error); //Object-Oriented
//    die("Connection failed: " . mysqli_connect_error()); //Procedural
//}
//
////Create DB
//$sql = "Create Database myDBProcedural1";
//if ($conn->query($sql) === TRUE) {
//    echo "Databse created successfully";
//} else {
//    echo "Error creating database: " . $conn->error;
//}
//
//$conn->close();

?>