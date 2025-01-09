<?php
$host = "host=localhost ";
$dbname = "dbname=postgres ";
$port = "port=5433 ";
$user = "user=postgres ";
$pass = "password=devagiri ";
$db = pg_connect($host.$port.$dbname.$user.$pass);
$query = "SELECT * FROM items;";
$rs = pg_query($db, $query);
echo "<h2>Items</h2>";
while($row = pg_fetch_row($rs)){
echo "<br><b>Item Code</b>:$row[0]";
echo "<br><b>Item Name</b>:$row[1]";
echo "<br><b>Unit Price</b>:$row[2]";
}

