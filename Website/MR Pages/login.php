<?php
include('connectDB_test.php');

if (isset($_POST["login"])) {

    $user = $_POST['empid'];
    $pass = $_POST['pin'];

    $sql2 = "SELECT * from login where id = $user and Password = $pass";

    $result = mysqli_query($connect, $sql2);
    $numrows = mysqli_num_rows($result);

    if ($numrows != 0) {
        header("Location: MR_table.php");
    } else {
        echo "Invalid username or password!";
    }
}
