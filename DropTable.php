<?php
/**
 * Created by PhpStorm.
 * User: monika.pandey
 * Date: 11/12/17
 * Time: 4:32 PM
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

$sql = "DROP TABLE tutorials_tbl";
mysql_selectdb('TUTORIALS');
$retval = mysql_query($sql, $conn);
if (!$retval) {
    die("Could not delete table: " . mysql_error());
}

echo "Table deleted successfully\n";

mysql_close($conn)

?>
