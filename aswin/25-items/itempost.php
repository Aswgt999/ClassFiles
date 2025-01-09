<?php
$itemCode = $_POST['item_code'];

$itemName = $_POST['item_name'];

$unitPrice = $_POST['unit_price'];


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
    $qu = "INSERT INTO items VALUES ('$itemCode', '$itemName',$unitPrice);";
    pg_query($db, $qu);
    echo "Values Inserted";    
}