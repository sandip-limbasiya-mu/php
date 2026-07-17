<?php


$days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
print_r($days);

echo "<br><br>";


$months = array(
    "January" => 31,
    "February" => 28,
    "March" => 31,
    "April" => 30,
    "May" => 31,
    "June" => 30,
    "July" => 31,
    "August" => 31,
    "September" => 30,
    "October" => 31,
    "November" => 30,
    "December" => 31
);
print_r($months);

echo "<br><br>";


$laptop = array(
    "HP" => array(
        "model" => "asus f17",
        "price" => 60000
    ),

    "ASUS" => array(
        "model" => "Vivobook 16X",
        "price" => 55000
    ),

    "DELL" => array(
        "model" => "victus",
        "price" => 75000
    )
);

print_r($laptop);

?>