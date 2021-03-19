<!DOCTYPE html>
</body>

</html>
<html>

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
               padding-left: 5px;
               margin-left: 40px;
               font-size: larger;
               font-family: Verdana, Geneva, Tahoma, sans-serif;
               width: 15rem;
               border: none;
               /* margin-top: 10%; */
               margin-bottom: 10%;
               /* margin-left:  0%; */
               border-radius: 20px;
          }
     </style>

</head>

<body>

     <!-- Material form login -->
     <section class="row">
          <div class="column">
               <img src="images/tru_logo.jpeg" alt="">
               <h2>Only For Truventa officials</h2>
          </div>
          <form action="forgetpass.php" method="POST">
               <div id="form" class="column">
                    <h3 id="login">FORGOT PASSWORD</h3>
                    <input type="text" id="empid" name="email" placeholder="Email ID" required>
                    <div style="display: flex;margin-top: 10%;margin-right: 5%;">
                         <button class="loginbtn" style="margin-right: 10%;" id="name" name="send" type="submit">Send Mail</button>
                    </div>
               </div>
          </form>
     </section>

</body>

</html>

<?php
include('connectdb.php');
if (isset($_POST['send'])) {

     $email = mysqli_real_escape_string($connect, $_POST['email']);
     echo $email;
     $sql2 = "SELECT * from employee where email = $email";

     $result = $connect->query("SELECT * FROM employee WHERE email = '$email' ");
     $emailcount = mysqli_num_rows($result);

     if ($emailcount) {

          $userdata = mysqli_fetch_array($result);
          $username = $userdata['name'];
          $token = $userdata['pin'];

          $subject = "Password Reset";
          $body = "Hi ,$username. Click here too activate your Account
        http://localhost/reset_password.php?token=$token ";
          $sender_email = "From : siddhantbobde123@gmail.com";

          if (mail($email, $subject, $body, $sender_email)) {
               $_SESSION['msg'] = "check your mail to reset your password $email";
               header('location:login.html');
          } else {
               echo "Email sending Failed";
          }
     } else {
          echo "email not found";
     }
}
?>