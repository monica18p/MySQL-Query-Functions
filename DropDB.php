<?php
/**
 * Created by PhpStorm.
 * User: monika.pandey
 * Date: 11/12/17
 * Time: 3:14 PM
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

$sql = "DROP DATABASE TUTORIALS";
$retvalue = mysql_query($sql, $conn);
if (!$retvalue) {
    die('Could not delete database: ' . mysql_error());
}
echo "\nDatabase TUTORIALS deleted successfully\n";
mysql_close($conn);


?>