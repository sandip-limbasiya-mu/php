<?php
$month = date("n");


echo "<h3>Using if..else </h3>";

if($month == 1)
    echo "Jan";
else if($month == 2)
    echo "Feb";
else if($month == 3)
    echo "Mar";
else if($month == 4)
    echo "Apr";
else if($month == 5)
    echo "May";
else if($month == 6)
    echo "June";
else if($month == 7)
    echo "July";
else if($month == 8)
    echo "Aug";
else if($month == 9)
    echo "Sep";
else if($month == 10)
    echo "Oct";
else if($month == 11)
    echo "Nov";
else
    echo "December";

echo "<h3>Using switch case</h3>";

switch($month)
{
    case 1:
        echo "Jan";
        break;

    case 2:
        echo "Feb";
        break;

    case 3:
        echo "Mar";
        break;

    case 4:
        echo "Apr";
        break;

    case 5:
        echo "May";
        break;

    case 6:
        echo "June";
        break;

    case 7:
        echo "July";
        break;

    case 8:
        echo "Aug";
        break;

    case 9:
        echo "Sep";
        break;

    case 10:
        echo "Oct";
        break;

    case 11:
        echo "Nov";
        break;

    case 12:
        echo "Dec";
        break;

    default:
        echo "Invalid Month";
}
?>