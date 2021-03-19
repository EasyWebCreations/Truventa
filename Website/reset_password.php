<!DOCTYPE html>
<html lang="en">

<head>

     <title>Truventa-Your Pharma Home</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


     <!-- MAIN CSS -->

     <style>
          #pin {
               margin-left: 10%;
          }

          .column {
               float: left;
               margin-left: 10%;
               margin-top: 8%;
          }

          .column img {
               width: 400px;
               height: 150px;
          }

          #login {
               margin-top: 0%;
               color: black;
               display: block;
               padding: 8px;
               background-color: #A4C31D;
          }

          #form {
               margin-top: 6%;
               margin-left: 16%;
               width: 320px;
               text-align: center;
               background-color: #EFE8E8;
               align-items: center;
               border-bottom-left-radius: 30px;
               border-bottom-right-radius: 30px;
          }

          input {
               display: block;
               width: 240px;
               margin-top: 10%;
               padding: 10px;
               margin-left: 15%;
          }

          .loginbtn {
               background-color: #A4C31D;
               padding: 8px;
               color: white;
               font-weight: bolder;
               font-size: larger;
               font-family: Verdana, Geneva, Tahoma, sans-serif;
               width: 15rem;
               border: none;
               /* margin-top: 10%; */
               margin-bottom: 10%;
               margin-left: 13%;
               border-radius: 20px;
          }
     </style>

</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <section class="row">

          <form action="login.html" method="POST">
               <div id="form" class="column">
                    <h3 id="login">LOGIN</h3>

                    <form action="login.html">

                         <input type="number" id="pin" name="pin" placeholder="NEW PIN" required>
                         <input type="number" id="pin" name="cpin" placeholder="Confirm NEW PIN" required>

                         <div style="display: flex; margin-top: 10%;">
                              <button class="loginbtn" style="margin-right: 10%;" name="updatepin" type="submit">Update PIN</button>
                         </div>

                    </form>

               </div>
          </form>
     </section>



</body>

</html>
<?php
include('connectdb1.php');


if (isset($_POST['updatepin'])) {

     $pin = mysqli_real_escape_string($connect, $_POST['pin']);
     $cpin = mysqli_real_escape_string($connect, $_POST['cpin']);

     echo $pin;
     echo $cpin;

     // $pin = password_hash($pin, PASSWORD_BCRYPT);
     $token = $_GET['token'];

     if ($pin == $cpin) {

          $updatequery = "UPDATE employee SET pin='$pin' WHERE pin='$token' ";

          $iquery = mysqli_query($connect, $updatequery);
     } else {
          echo "Password does not match";
     }
}
?>