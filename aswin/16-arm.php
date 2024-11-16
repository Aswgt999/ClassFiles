<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armstrong</title>
</head>
<body>
    <form method="post">
        Enter three digit no: <input type="text" name="num">
        <input type="submit" value="submit">
    </form>
    <?php
        $number =  $_POST['num'];
        $a = $number;
        $sum = 0;
        while($a != 0){
            $rem = $a % 10;
            $sum += pow($rem, 3);
            $a /= 10;
        }
        // if($sum == $number){
        //     echo "Armstrong number";
        // } else{
        //     echo "Not an Armstrong number";
        // }
        switch($sum){
            case $number:
                echo "Armstrong number";
                break;
            default:
                echo "Not armstrong number";

        }
    ?>
</body>
</html>