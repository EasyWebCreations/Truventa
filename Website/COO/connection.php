<?php

$connect = mysqli_connect('localhost:3307', 'root', 'admin123', 'truventa');
if (!$connect) {
    echo "connection error" . mysqli_connect_error();
} else {
    // echo "<h3> Database connection success</h3>";
}
