<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Number</title>
</head>
<body>
    <form method="post">
        Enter number: <input type="text" name="num">
        <input type="submit" value="submit">
    </form>
    <?php
        $num =  $_POST['num'];

        function sum($num){
            $s = 0; $n = 1;
            while($n < $num){
                if($num % $n == 0)
                    $s += $n;
                $n++;
            }
            return $s;
        }

        $check = sum($num);

        if ($check ==  $num){
            echo "Perfect Number";
        }else if($check < $num){
            echo "Deficient";
        }else{
            echo "Abundant";
        }
    ?>
</body>
</html>