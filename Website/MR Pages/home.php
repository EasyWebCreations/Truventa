<?php

// Username is root 
$user = 'root';
$password = '';


$database = 'truventa';

$servername = 'localhost';
$mysqli = new mysqli(
     $servername,
     $user,
     $password,
     $database
);

// Checking for connections 
if ($mysqli->connect_error) {
     die('Connect Error (' .
          $mysqli->connect_errno . ') ' .
          $mysqli->connect_error);
}


$sql1 = "SELECT * FROM leaves";
$result = $mysqli->query($sql1);
$mysqli->close();
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

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="dynamic_tabs.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="writetous.css">
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
          .second:hover,.nav-pills>li.active>.second, .nav-pills>li.active>.second:focus{
               background-color: #A4C31D;
               border-top-right-radius: 25px;
               border-bottom-right-radius: 25px;
               border-top-left-radius: 0px;
               border-bottom-left-radius: 0px;
          }

          .first:hover,.nav-pills>li.active>.first, .nav-pills>li.active>.first:focus{
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
    color:white;
    border:2px solid black;
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
                         </ul>
                    </div>

               </div>
          </section>


          <div class="row">
               <div class="column left">
                    <table class="slide-box">

                         <table class="table2" class="menu">
                              <tr>
                                   <th class="iconbox"><i class="fa fa-shopping-basket"></i></th>
                                   <td class="borderbox"> <a class="tabbuttons1" onclick="openCity(event, 'one')" id="defaultOpen" style="color:black"> <b class="on">Order Now </b></a><br /></td>
                              </tr>
                         </table>
                         <table class="table2">
                              <tr>
                                   <th class="iconbox"><i class="fa fa-truck"></i></th>
                                   <td class="borderbox"><a class="tabbuttons1" onclick="openCity(event, 'two')" style="color:black"> <b>Track Orders </b></a></td>
                              </tr>
                         </table>
                         <table class="table2">
                              <tr>
                                   <th class="iconbox"><i class="fa fa-history"></i></th>
                                   <td class="borderbox"><a class="tabbuttons1" onclick="openCity(event, 'three')" style="color:black"> <b>Order History </b></a></td>
                              </tr>
                         </table>
                         <table class="table2">
                              <tr>
                                   <th class="iconbox"><i class="fa fa-bar-chart"></i></th>
                                   <td class="borderbox"><a class="tabbuttons1" onclick="openCity(event, 'four')" style="color:black"> <b>Your Progress </b></a></td>
                              </tr>
                         </table>
                         <table class="table2">
                              <tr>
                                   <th class="iconbox"><i class="material-icons">assignment</i></th>
                                   <td class="borderbox"><a class="tabbuttons1" onclick="openCity(event, 'five')" style="color:black"> <b>Apply for Leave </b></a></td>
                              </tr>
                         </table>
               </div>

               </table>



               <div ID="one" class="tabcontent">
                    <h3>London</h3>
                    <p>London is the capital city of England.</p>
               </div>

               <div ID="two" class="tabcontent">

               </div>
               <div ID="three" class="tabcontent">

               </div>

               <div ID="four" class="tabcontent">

               </div>

               <div ID="five" class="tabcontent">
                    <div class="container" style="margin-left: 30%;margin-top: -5%;">

                       
                    <ul id="navigation" class="nav nav-pills" style="margin-left: 30%;">

                              <li class="first_back" style="border: 2px solid;border-top-left-radius: 25px;border-bottom-left-radius: 25px;">

                                    <a data-toggle="pill" id="first" href="#menu1" class="li first" style="font-size: 20px;color:black;">New Application</a></li>
                                    <li class="second_back"id="li" style="background-color:lightgray;border: 2px solid;border-top-right-radius: 25px; border-bottom-right-radius: 25px;">
                                        <a data-toggle="pill" class="second" id="second" href="#menu2" style="font-size: 20px;color:black;">Application History</a></li>

                         </ul>

                         <div class="tab-content">

                              <div id="menu1" class="tab-pane fade">
                                   <h3 style="color:white">Menu 1</h3>
                                   <form action="home.php" id="form" style="background-color:#E4E5E6;border:2px solid black" method="POST" style="">
                                        <div style="display: flex;">

                                             <input type="number" style="width: 45%;margin-right:10%;height: 40px;" id="quantity" name="id" placeholder="Employee ID">

                                             <br>
                                             <div style="display:flex;background-color:white;width:200px;height: 40px;padding:8px">
                                             <p style="font-size:15px;margin-left:5%;">Type</p>
                                             <select style="width: 15%;width:25%;background-color:#A4C31D;;color:black;margin-left:35%;" id="type" name="type" placeholder="TYPE">
                                                  <option value="PL">PL</option>
                                                  <option value="CL">CL</option>
                                                  <option value="SL">SL</option>

                                             </select></div>
                                             
                                        </div>

                                        <br>
                                        <div style="display: flex;">
                                             <input style="width: 45%;margin-right:10%;height: 40px;" id="datePicker" type="date" name="fdate">

                                             <br>
                                             <input style="width: 45%;height: 40px;" type="number" id="duration" name="duration" placeholder="duration">



                                             <br>
                                             <br>
                                        </div>
                                        <br>

                                        <input style="width:100%;height:100px" type="text" id="remarks" name="remarks" placeholder="Enter remarks"><br>
                                        <br>
                                        <input style="width:30%;height:40px;background-color:#A4C31D;" type="submit" name="insert_data">
                                   </form>

                              </div>
                              <div id="menu2" class="tab-pane fade">

                                   <!-- hjjhds -->


                                   <section>


                                        <table id="database" class="table-striped table-hover">
                                             <thead class="bg-success" style="background-color:#5cb85c">
                                                  <tr>
                                                       <th>LID</th>
                                                       <th>Type</th>
                                                       <th>From</th>
                                                       <th>Duration</th>
                                                       <th>Decision</th>
                                                       <th>PL Balance</th>
                                                  </tr>


                                             </thead>

                                             <?php
                                             while ($rows = $result->fetch_assoc()) {
                                             ?>
                                                  <tr>

                                                       <td><?php echo $rows['lid']; ?></td>
                                                       <td><?php echo $rows['type']; ?></td>
                                                       <td><?php echo $rows['fdate']; ?></td>
                                                       <td><?php echo $rows['duration']; ?></td>
                                                       <td><?php echo "Default"; ?></td>
                                                       <td><?php echo $rows['pl_bal']; ?></td>
                                                  </tr>
                                             <?php
                                             }
                                             ?>
                                        </table>
                                   </section>

                              </div>

                         </div>
                    </div>

               </div>
          </div>


          <!-- FOOTER -->
          <footer data-stellar-background-ratio="5">
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



          </footer>



     </body>
     <!-- SCRIPTS -->
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
<?php
if (isset($_POST['insert_data'])) {
     //$conn = mysqli_connect("localhost:3307","root","admin123","easycode");
     $conn = mysqli_connect("localhost", "root", "", "truventa");


     $id = $_POST['id'];
     $type = $_POST['type'];
     $fdate = $_POST['fdate'];
     $duration = $_POST['duration'];
     $remarks = $_POST['remarks'];

     $pl_query = "SELECT SUM(duration) FROM `leaves` WHERE id = $id AND decision = 'accepted'";
     $pl_result = $conn->query($pl_query);
     $fetched_result = $pl_result->fetch_assoc();
     $past_leaves = $fetched_result["SUM(duration)"];
     $plb = 18 - $past_leaves; 
     echo $plb;
     // echo $accepted_leaves;
     $sql = "INSERT INTO leaves(id,`type`,fdate,duration,remarks,pl_bal) VALUES ('$id','$type','$fdate','$duration','$remarks',$plb)";
     
     $sql1 = "SELECT * FROM leaves ORDER BY fdate DESC";
     $result = $conn->query($sql1);


     mysqli_query($conn, $sql);
     if (mysqli_error($conn))
          echo "Record insertion error";
     else
          echo "Record added successfully.";
}
?>