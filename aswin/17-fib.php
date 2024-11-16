<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
</head>
<center>
<body>
    <form method="post">
        
        Enter limit: <input type="text" name="limit">
        <input type="submit" value="submit"> 
    </form>
    <?php
        $limit = $_POST['limit'];
        $fib = [0, 1];
        for($i = 0;  $i < $limit - 2; $i++){
            $fib[] = $fib[$i] + $fib[$i + 1];
        }
        for($i = 0;  $i < $limit - 1; $i++){
            echo $fib[$i] . ", ";
        }
        echo  $fib[$limit - 1];
    ?>
</body>
</center>
</html>