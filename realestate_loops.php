<?php 

$string = file_get_contents("realestate_data_clean.json");
$json_a=json_decode($string,true);

foreach ($json_a as $value) {
    echo "<br><br>line";
    print_r($value['MedianPrice']);
}

// print_r($json_a);

// echo "let's see some real estate data";
?>