<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "truventa";

// Create connection
$connect = new mysqli($servername, $username, $password,$dbname);

if ($connect->connect_error) 
{
  echo "Connection failed: ";
}
else
{
    if(isset($_POST['submit'])){
        $productArr = $_POST['products'];
        $qtArr = $_POST['quantities'];
        $priceArr = $_POST['prices'];
        if(!empty($productArr)){
            for($i = 0; $i < count($productArr); $i++){
                if(!empty($productArr[$i])){
                    $product = $productArr[$i];
                    $quantity = $qtArr[$i];
                    $price  = $priceArr[$i];
                    
                    // Database insert query goes here
                    // $qt=7;
                    $sql1 = "INSERT INTO `orders` ( `date`, `mrid`, `sid`, `product`, `qty`, `price`, `status`) VALUES (current_timestamp(), '1', '2', '$product', $quantity, $price, 'pending')";

                    mysqli_query($connect,$sql1);
                    if(mysqli_error($connect))
                    echo " Record insertion error";
                    else
                    echo "<br>Your Order has been successfully placed<br><a href='MR.php'>Click here</a>";


                }
            }
        }
    }
}

?>


