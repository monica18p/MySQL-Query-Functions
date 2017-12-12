<?php
/**
 * Created by PhpStorm.
 * User: monika.pandey
 * Date: 11/12/17
 * Time: 5:13 PM
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

$sql = "SELECT tutorial_id, tutorial_title, tutorial_author, submission_date FROM tutorials_tbl";

mysql_select_db("TUTORIALS");
$retval = mysql_query($sql, $conn);

if (!$retval) {
    die("Coul dnot get data: " . mysql_error());
}

echo "<br>";
echo "<br>";

while ($row = mysql_fetch_array($retval, MYSQL_NUM)) {
    echo "Tutorials ID: {$row[0]} <br> ".
        "Title: {$row[1]} <br> ".
        "Author: {$row[2]} <br> ".
        "Submission Date: {$row[3]} <br> ".
        "---------------------------------------------<br>";
}

mysql_free_result($retval); //Releasing Memory
echo "Fetched data successfully\n";

mysql_close($conn);

?>