<?php
/**
 * Created by PhpStorm.
 * User: monika.pandey
 * Date: 12/12/17
 * Time: 10:37 AM
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
echo "<br>Connected successfully\n";

$sql = "UPDATE tutorials_tbl SET tutorial_title='JAVA Complete Reference' WHERE tutorial_id=3";

mysql_select_db("TUTORIALS");
$retval = mysql_query($sql, $conn);

if (!$retval) {
    die("Could not updated data: " . mysql_error());
}

echo "Updated data successfully";
mysql_close();

?>