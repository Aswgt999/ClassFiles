<?php
$reg = $_POST['reg'];
$host = "host=localhost ";
$dbname = "dbname=postgres ";
$port = "port=5433 ";
$user = "user=postgres ";
$pass = "password=devagiri ";
$db = pg_connect($host.$port.$dbname.$user.$pass);
if(!$db){
    echo "Connection Error!!!";
} else {
    echo "Connection Established<br><br>";
    $query = "SELECT * FROM student WHERE roll_no = $reg;";
    $rs = pg_query($db, $query);
    $row = pg_fetch_row($rs);
    echo "<h2>Marklist</h2>";
    echo "<br><b>Roll No</b>:$row[0]";
    echo "<br><b>Name</b>:$row[1]";
    echo "<br><b>Physics</b>:$row[2]";
    echo "<br><b>Maths</b>:$row[3]";
    echo "<br><b>English</b>:$row[4]";
    echo "<br><b>Computer Science</b>:$row[5]";
    echo "<br><b>Grade</b>:$row[6]";
}