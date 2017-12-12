<?php
/**
 * Created by PhpStorm.
 * User: monika.pandey
 * Date: 12/12/17
 * Time: 10:52 AM
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

$sql = "DELETE FROM tutorials_tbl WHERE tutorial_id=3";

mysql_select_db("TUTORIALS");
$retval = mysql_query($sql, $conn);

if (!$retval) {
    die("Could not delete data: " . mysql_error());
}

echo "Deleted data successfully";
mysql_close();

?>