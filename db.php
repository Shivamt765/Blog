<?php 
    $conn=mysqli_connect("localhost","root","","blog");
    if(!$conn){
        echo "Connection UnSuccessful". mysqli_connect_error();
    }
?>