<?php
    $conn = mysqli_connect("localhost","root","","bca_5c");
    $sql = "delete from `users` where `id`=2";
    $result = mysqli_query($conn,$sql);

    
    echo "record deleted!";
?>