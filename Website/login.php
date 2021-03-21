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

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">
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

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>

          </div>
     </section>


     <!-- HEADER -->
     <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                         <p>Welcome to a Professional Pharma Care</p>
                    </div>

                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> 010-060-0160</span>

                         <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="mailto:care@truventahealthcare.com">care@truventahealthcare.com</a></span>
                    </div>

               </div>
          </div>
     </header>


     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.html" class="navbar-logo"><img style="width:180px;height:55px;padding:0px ;" src="images/tru_logo.jpeg"> </a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#top" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">About Us</a></li>
                         <li><a href="#team" class="smoothScroll">products</a></li>
                         <li><a href="#news" class="smoothScroll">Testimonials</a></li>
                         <li><a href="#google-map" class="smoothScroll">Contact</a></li>
                         <li class="appointment-btn"><a href="mailto:care@truventahealthcare.com">Write to us</a></li>
                    </ul>
               </div>

          </div>
     </section>


     <section class="row">
          <div class="column">
               <img src="images/tru_logo.jpeg" alt="">
               <h2>Only For Truventa officials</h2>
          </div>

          <div id="form" class="column">
               <h3 id="login">LOGIN</h3>

               <form action="login1.php" method="POST">
                    <input type="text" id="empid" name="empid" placeholder="Employeee ID" required>
                    <input type="number" id="pin" name="pin" placeholder="PIN" required>

                    <div style="display: flex; margin-top: 10%;">
                         <a id="forgetpass" href="forgetpass.php" style="width: 80%;margin-left: 2%;text-decoration: none;color: blue;
                    font-weight: bolder;font-size: larger;margin-top: 2%;">Forget PIN?</a>
                         <button class="loginbtn" type="submit" name="login" style="margin-right: 10%;">Login</button>

                    </div>
               </form>

          </div>
     </section>

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

</body>

</html>