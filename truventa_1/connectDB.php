<?php

$connect = mysqli_connect('localhost','root','','truventa'); 
if(!$connect)
{
    echo "connection error".mysqli_connect_error();
}
else{
    echo "<h3> Database connection success</h3>";
}
?>