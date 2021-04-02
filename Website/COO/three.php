<?php

session_start();

if (!isset($_SESSION['name'])) {
     header('location:../login.php');
     exit;
}


?>

<!DOCTYPE html>
<html>

<head>
     <title>Truventa-Your Pharma Home</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="dynamic_tabs.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="writetous.css">


     <link rel="stylesheet" href="media.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
     <script>
          $(document).ready(function() {
               var now = new Date();

               var day = ("0" + now.getDate()).slice(-2);
               var month = ("0" + (now.getMonth() + 1)).slice(-2);

               var today = now.getFullYear() + "-" + (month) + "-" + (day);


               $('#datePicker').val(today);
          });
     </script>

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">
     <style>
          .second:hover,
          .nav-pills>li.active>.second,
          .nav-pills>li.active>.second:focus {
               background-color: #A4C31D;
               border-top-right-radius: 25px;
               border-bottom-right-radius: 25px;
               border-top-left-radius: 0px;
               border-bottom-left-radius: 0px;
          }

          .first:hover,
          .nav-pills>li.active>.first,
          .nav-pills>li.active>.first:focus {
               background-color: #A4C31D;
               border-top-left-radius: 25px;
               border-bottom-left-radius: 25px;
               border-top-right-radius: 0px;
               border-bottom-right-radius: 0px;
          }

          table {
               margin: 0 auto;
               font-size: large;
               border: 1px solid black;
          }

          table {
               border-left: 2px solid black;
               border-right: 2px solid black;
               border-top: 2px solid black;
               border-bottom: 2px solid black;
          }

          h1 {
               text-align: center;
               color: #006600;
               font-size: xx-large;
               font-family: 'Gill Sans', 'Gill Sans MT',
                    ' Calibri', 'Trebuchet MS', 'sans-serif';
          }

          td {

               border: 1px solid black;
               padding: 20px;
          }

          th,
          td {
               font-weight: bold;
               border: 1px solid black;
               padding: 10px;
               text-align: center;
          }

          td {
               font-weight: lighter;
          }

          input[type="date"]::-webkit-calendar-picker-indicator {

               opacity: 1;
               display: block;
               background-color: #A4C31D;
               width: 20px;
               height: 20px;
               border-width: thin;
               color: white;
               border: 2px solid black;
          }

          ::-webkit-input-placeholder {
               /* Chrome/Opera/Safari */
               color: black;
               font-size: 20px;
          }

          ::-moz-placeholder {
               /* Firefox 19+ */
               color: black;
               font-size: 20px;
          }

          :-ms-input-placeholder {
               /* IE 10+ */
               color: black;
               font-size: 20px;
          }

          :-moz-placeholder {
               /* Firefox 18- */
               color: black;
               font-size: 20px;
          }
     </style>
</head>

<body>

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
                              <li class="appointment-btn" style="margin-top: 5px;">
                                   <form action="../logout.php" method="GET">
                                        <button type="submit" name="logout" style="border: transparent;border-radius: 4px;color:white;float: right;padding: 11px;background-color: #A4C31D;">Logout</button>
                                   </form>
                              </li>
                         </ul>
                    </div>

               </div>
          </section>


          <div class="row">
               <div class="column left">
                    <table class="slide-box">

                         <table class="slide-box">

                              <table class="table2" class="menu">
                                   <tr>
                                        <th class="iconbox"><i class="fa fa-hourglass-start" style="font-size:36px"></i></th>
                                        <td class="borderbox"> <a class="tabbuttons1" href="home.php" style="color:black;font-size:25px"> <b class="on">Create Account</b></a><br /></td>
                                   </tr>
                              </table>
                              <table class="table2">
                                   <tr>
                                        <th class="iconbox"><i class="fa fa-truck"></i></th>
                                        <td class="borderbox"><a class="tabbuttons1" href="two.php" style="color:black;font-size:25px"> <b>Employee Record</b></a></td>
                                   </tr>
                              </table>
                              <table class="table2">
                                   <tr>
                                        <th class="iconbox"><i class="fa fa-check-square-o" style="font-size:36px;"></i></th>
                                        <td class="borderbox"><a class="tabbuttons1" href="three.php" style="color:black;font-size:25px"> <b>Set Target</b></a></td>
                                   </tr>
                              </table>
                              <table class="table2">
                                   <tr>
                                        <th class="iconbox"><i class="fa fa-bar-chart"></i></th>
                                        <td class="borderbox"><a class="tabbuttons1" href="four.php" style="color:black;font-size:25px"> <b>Leave Applications</b></a></td>
                                   </tr>
                              </table>
               </div>

               </table>



               <div ID="one" class="tabcontent">

                    <h1>Set Target</h1>

                    <h1 style="position:relative;top:-500px;visibility:hidden;">third page</h1>
                    <?php

                    // php code to Insert data into mysql database from input text
                    if (isset($_POST['insert'])) {
                         $hostname = "localhost";
                         $username = "root";
                         $password = "";
                         $databaseName = "truventa";

                         // get values form input text and number

                         $mrid = $_POST['mrid'];
                         $month = $_POST['month'];
                         $target = $_POST['target'];
                         $remarks = $_POST['remarks'];
                         // connect to mysql database using mysqli
                         $month = substr($month, 5);
                         $connect = mysqli_connect($hostname, $username, $password, $databaseName);

                         // mysql query to insert data

                         $query = "INSERT INTO `per`(`mrid`, `month`, `target`, `remarks`) VALUES ('$mrid','$month','$target','$remarks')";

                         $result1 = mysqli_query($connect, $query);

                         // check if mysql query successful

                         // if($result1)
                         // {
                         //     echo 'Data Inserted';

                         // }

                         // else{
                         //     echo 'Data Not Inserted';
                         // }


                         mysqli_close($connect);
                    }

                    ?>
                    <div id="set" style="background-color:#E4E5E6;
                    padding:30px;margin-top:-60px;border: 2px solid black;">
                         <form action="three.php" method="post" style="margin-left:10%;">
                              <h1 style="color:black">Set Target</h1>
                              <div style="display:flex">

                                   <input style="font-weight:bolder;font-size:20px;width:40%;margin-right:10%" type="number" name="mrid" required placeholder="ID"><br><br>
                                   <div style="background-color:white;height:40px;width:40%;display:flex">
                                        <p style="font-size:20px;margin-top:7px;font-weight:bold;margin-left:20%;margin-right:20%">Type</p>
                                        <select style="width: 30%;background-color:#A4C31D;color:black;font-size:15px;height:30px;margin-top:5px" id="type" name="type" placeholder="TYPE">
                                             <option value="MR">HR</option>

                                        </select>
                                        <br>
                                        <br>
                                   </div>
                              </div>
                              <br>
                              <br>
                              <div style="display:flex" style="background-color:white">
                                   <div style="background-color:white;display:flex;height:40px;width:40%;margin-right:10%">
                                        <p style="color:black;margin-right:10%;font-size:20px;font-weight:bold;margin-top:7px;margin-left:23%">Month</p>
                                        <input style="width:30%;margin-right:10%;background-color:#A4C31D;
            height:30px;margin-top:5px" type="month" name="month" required placeholder="Month" min="1" max="12"><br><br>
                                   </div>
                                   <input style="font-weight:bold;width:40%;font-size:20px" type="number" name="target" required placeholder="Target" min="10" max="100"><br><br>
                              </div>
                              <br>
                              <br>
                              <input style="width:90%;height:60px;font-size:20px;font-weight:bold" type="text" name="remarks" required placeholder="Remarks(if any)"><br><br>

                              <input type="submit" name="insert" value="Assign" style="border: none;margin-left:60%;font-size:20px;height:40px;width:30%;background-color:#A4C31D;color:white;font-weight:bold">

                         </form>
                    </div>














                    <!-- FOOTER -->
                    <!-- <footer data-stellar-background-ratio="5">
               <div class="container">
                    <div class="row">

                         <div class="col-md-6 col-sm-6">
                              <div class="footer-thumb">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>
                                   <p>Fusce at libero iaculis, venenatis augue quis, pharetra lorem. Curabitur ut dolor eu elit consequat ultricies.</p>

                                   <div class="contact-info">
                                        <p><i class="fa fa-phone"></i> 010-070-0170</p>
                                        <p><i class="fa fa-envelope-o"></i> <a href="#">care@truventahealthcare.com</a></p>
                                   </div>
                              </div>
                         </div>

                         <div class="col-md-6 col-sm-6">
                              <div class="footer-thumb">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">Latest News</h4>
                                   <div class="latest-stories">
                                        <div class="stories-image">
                                             <a href="#"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>
                                        </div>
                                        <div class="stories-info">
                                             <a href="#">
                                                  <h5>Amazing Technology</h5>
                                             </a>
                                             <span>March 08, 2018</span>
                                        </div>
                                   </div>

                                   <div class="latest-stories">
                                        <div class="stories-image">
                                             <a href="#"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>
                                        </div>
                                        <div class="stories-info">
                                             <a href="#">
                                                  <h5>New Healing Process</h5>
                                             </a>
                                             <span>February 20, 2018</span>
                                        </div>
                                   </div>
                              </div>
                         </div>



                         <div class="col-md-12 col-sm-12 border-top">

                              <div class="copyright-text">
                                   <p> This website is developed and managed by <a href="http://www.3hundredsolutions.tech/" style="font:Agency FB">3Hundred Solutions<a></p>
                              </div>


                         </div>

                    </div>
               </div>



          </footer> -->



     </body>

     <script src="js/jquery.js"></script>
     <script src="js/custom.js"></script>

     <script>
          function openCity(evt, cityName) {
               var i, tabcontent, borderbox;
               tabcontent = document.getElementsByClassName("tabcontent");
               for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
               }
               borderbox = document.getElementsByClassName("");
               for (i = 0; i < borderbox.length; i++) {
                    tablinks[i].className = borderbox[i].className.replace(" active", "");
               }
               document.getElementById(cityName).style.display = "block";
               evt.currentTarget.className += " active";
          }

          // Get the element with id="defaultOpen" and click on it
          document.getElementById("defaultOpen").click();


          var enterHandler = function() {
               $(".tabbuttons1").show();
          };
     </script>

</html>