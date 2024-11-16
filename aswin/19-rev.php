<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse</title>
</head>
<body>
    <form method="post">
        String:  <input type="text" name="str">
        <input type="submit" value="submit">
    </form>
    <?php
        $str = $_POST['str'];
        function reverse($str){
            $str = strrev($str);
            return $str;
        }
        echo reverse($str);
    ?>
</body>
</html>