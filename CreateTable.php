<html>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: monika.pandey
 * Date: 11/12/17
 * Time: 4:13 PM
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

$sql = "CREATE TABLE tutorials_tbl(".
    "tutorial_id INT NOT NULL AUTO_INCREMENT, ".
    "tutorial_title VARCHAR(100) NOT NULL, ".
    "tutorial_author VARCHAR(40) NOT NULL, ".
    "submission_date DATE, ".
    "PRIMARY KEY(tutorial_id));";

mysql_select_db('TUTORIALS');
$retval = mysql_query($sql, $conn);
if (!$retval) {
    die("\nCould not create table: " . mysql_error());
}

echo "\nTable created successfully\n";

mysql_close($conn);

?>
</body>
</html>

