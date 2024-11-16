<?php
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $db = pg_connect('host=localhost port=5433 dbname=postgres user=postgres password=devagiri');
    if (!$db) {
        echo "Connection error!!";
    } else {
        echo "Connection established";
        $query = "SELECT * FROM login WHERE username = '$user';";
        $ret = pg_query($db, $query);
        $row = pg_fetch_row($ret); 
        if($row[1] == $pass){
            echo"<br><br>Login Successfull";
        } else {
            echo"<br><br>Invalid Password!!!";
        }
    }
    