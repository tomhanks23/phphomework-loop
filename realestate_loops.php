<?php 

$string = file_get_contents("realestate_data_clean.json");
$json_a=json_decode($string,true);

foreach ($json_a as $value) {
    echo "<br><br>line";
    print_r($value['MedianPrice']);
}

// print_r($json_a);

// echo "let's see some real estate data";


// Exercise 1
// Print each City Name

// Exercise 2
// Print each City Name and Number of Listings

// Exercise 3
// Print total number of listing for all cities

// Exercise 4
// Find the City with the least Listings

// Exercise 5
// Find the City with the Most listing

// Exercise 6 
// Find the city with the most expensive listings

// Exercise 7 
// Find the City with the least expensive Listing

// Exercise 8 
// Find the City with the oldest people

// Exercise 9
// Find the City with the Youngest and Richest City






?>