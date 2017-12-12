<?php
/**
 * Created by PhpStorm.
 * User: monika.pandey
 * Date: 11/12/17
 * Time: 3:35 PM
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
//$sql = "CREATE DATABASE TUTORIALS";
//$retval = mysql_query($sql, $conn);
//if (!$retval) {
//    die("Could not create database: " . mysql_error());
//}
mysql_select_db("TUTORIALS");
mysql_close($conn);

?>