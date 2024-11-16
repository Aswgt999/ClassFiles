<?php
    if(isset($_POST['number'])){
        $number = intval($_POST['number']);
        $output = "<h3>Mutltiplication Table for {$number}:</h3><ul>";

        for($i =  1; $i <= 10; $i++){
            $result = $number * $i;
            $output .= "<li>{$number} x {$i} = {$result}</li>";
        }

        $output .= "</ul>";
        echo $output;
    }
