<?php
/**
 * Created by PhpStorm.
 * User: monika.pandey
 * Date: 12/12/17
 * Time: 12:25 PM
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

$sql = "SELECT tutorial_id, tutorial_title, tutorial_author, submission_date 
FROM tutorials_tbl ORDER BY tutorial_author ASC";

mysql_select_db('TUTORIALS');
$retval = mysql_query( $sql, $conn );

if(! $retval ) {
    die('Could not get data: ' . mysql_error());
}

$count = mysql_num_rows($retval);
if ($count == 0) {
    die("<br>No data found");
}

echo "<br>";

while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
    echo "Tutorial ID :{$row['tutorial_id']}  <br> ".
        "Title: {$row['tutorial_title']} <br> ".
        "Author: {$row['tutorial_author']} <br> ".
        "Submission Date : {$row['submission_date']} <br> ".
        "--------------------------------<br>";
}
echo "Fetched data successfully\n";

mysql_close($conn);

?>