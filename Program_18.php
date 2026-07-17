<?php

$str = "Sandip Limbasiya";

echo "String = " . $str . "<br><br>";

echo "Length = " . strlen($str) . "<br>";

echo "Position of Limbasiya = " . strpos($str, "Limbasiya") . "<br>";

echo "Word Count = " . str_word_count($str) . "<br>";

echo "Reverse = " . strrev($str) . "<br>";

echo "Lowercase = " . strtolower($str) . "<br>";

echo "Uppercase = " . strtoupper($str);

?>