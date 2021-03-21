<?php
include('connectdb1.php');

session_start();

if (isset($_POST["login"])) {

    $user = $_POST['empid'];
    $pass = $_POST['pin'];

    $sql2 = "SELECT * from employee where id = '$user'";

    $result = mysqli_query($connect, $sql2);
    $numrows = mysqli_num_rows($result);

    $userdata = mysqli_fetch_assoc($result);

    $pass_decode = password_verify($pass, $userdata['pin']);

    $_SESSION['name'] = $userdata['name'];

    if ($pass_decode) {
        $designation = $userdata['designation'];
        if ($designation == 'MR') {
            header("Location: MR_Pages/MR.php?user=" . $user);
        } elseif ($designation == 'HR') {
            header("Location: HR/create.php?user=" . $user);
        } elseif ($designation == 'Stock') {
            header("Location: Stockist/home.php?user=" . $user);
        } else {
            echo "<h3>Invalid ID or password!</h3>";
        }
    } else {
?>
        <script>
            alert('Invalid Username or Password');
        </script>
<?php
    }
}
?>