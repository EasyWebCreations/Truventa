<?php
include('connectDB.php');

if (isset($_POST["login"])) {

    $user = $_POST['empid'];
    $pass = $_POST['pin'];

    $sql2 = "SELECT * from employee where id = '$user' and pin = '$pass' ";

    $result = mysqli_query($connect, $sql2);
    $numrows = mysqli_num_rows($result);

    $userdata = mysqli_fetch_assoc($result);
    if ($numrows != 0) {
        $designation = $userdata['designation'];
        if ($designation == 'MR') {
            header("Location: MR_Pages/MR.php");
        } elseif ($designation == 'HR') {
            header('Location: HR/create.php');
        } elseif ($designation == 'Stock') {
            header("Location: Stockist/home.php");
        } else {
            echo "<h3>Invalid ID or password!</h3>";
        }
    } else {
        echo "<h3>Invalid username or password!</h3>";
    }
}
