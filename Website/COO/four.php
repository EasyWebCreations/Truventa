<?php
// Username is root 
$user = 'root';
$password = 'admin123';


$database = 'truventa';

$servername = 'localhost:3307';
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

if (isset($_POST['decide_leave'])) {
     // include('connectDB.php');
     include('connection.php');
     $lid = $_POST['lid'];
     $decide = $_POST['decide'];
     echo $decide;
     echo $lid;
     $sql2 = "UPDATE leaves SET decision='$decide' WHERE lid = '$lid' ";
     $resultt = $mysqli->query($sql2);
     }

$sql1 = "SELECT * FROM leaves";
$result = $mysqli->query($sql1);

?>

<?php
if (isset($_POST['insertdata'])) {
     //$conn = mysqli_connect("localhost:3307","root","admin123","easycode");
     $conn = mysqli_connect("localhost:3307", "root", "admin123", "truventa");


     $id = $_POST['id'];
     $type = $_POST['type'];
     $fdate = $_POST['fdate'];
     $duration = $_POST['duration'];
     $remarks = $_POST['remarks'];
     $decision = "Pending";

     $sql = "INSERT INTO leaves(id,type,fdate,duration,remarks) VALUES ('$id','$type','$fdate','$duration','$remarks')";


     $sql1 = "SELECT * FROM leaves";
     $result = $mysqli->query($sql1);


     mysqli_query($conn, $sql1);
     if (mysqli_error($conn))
          echo "Record insertion error";
     else
          echo "Record added successfully.";
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

::-webkit-input-placeholder { /* Chrome/Opera/Safari */
   color: black;
   font-size: 20px; 
}
::-moz-placeholder { /* Firefox 19+ */
   color: black;
   font-size: 20px; 
}
:-ms-input-placeholder { /* IE 10+ */
   color: black;
   font-size: 20px; 
}
:-moz-placeholder { /* Firefox 18- */
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
          <td class="borderbox"> <a class="tabbuttons1" href="home.php"  style="color:black;font-size:25px"> <b class="on">Create Account</b></a><br /></td>
     </tr>
</table>
<table class="table2">
     <tr>
          <th class="iconbox"><i class="fa fa-truck"></i></th>
          <td class="borderbox"><a class="tabbuttons1" href="two.php"  style="color:black;font-size:25px"> <b>Employee Record</b></a></td>
     </tr>
</table>
<table class="table2">
     <tr>
          <th class="iconbox"><i class="fa fa-check-square-o" style="font-size:36px;"></i></th>
          <td class="borderbox"><a class="tabbuttons1" href="three.php"  style="color:black;font-size:25px"> <b>Set Target</b></a></td>
     </tr>
</table>
<table class="table2">
     <tr>
          <th class="iconbox"><i class="fa fa-bar-chart"></i></th>
          <td class="borderbox"><a class="tabbuttons1" href="four.php"  style="color:black;font-size:25px"> <b>Leave Applications</b></a></td>
     </tr>
</table>
       
                         
               </div>

               </table>



               <div ID="one" class="tabcontent">


                         <?php
    
                         $sql4 = "SELECT * FROM leaves where decision='Pending' ";
                         $result3 = $mysqli->query($sql4);
     
        ?>
    
        <div class="row " style="margin-top:50px">
            <table class="table table-striped table-hover" style="width:60%;margin-top:-2%;margin-left:30%">
                <thead class="bg-success" style="background-color:#00B74A">
                    <tr>
                        <th>Leave ID</th>
                        <th>Type</th>
                        <th>From</th>
                        <th>Duration</th>
                        <th>PL Balance</th>
                        <th>Decide</th>
                        <th>Update</th>
                    </tr>
                </thead>
                <?php
                while ($row3 = $result3->fetch_assoc()) : ?>
                    <tr>
                        <td><?php echo $row3['lid']; ?></td>
                        <td><?php echo $row3['type']; ?></td>
                        <td><?php echo $row3['fdate']; ?></td>
                        <td><?php echo $row3['duration']; ?></td>
                        <td><?php echo $row3['pl_bal']; ?></td>
                        <td><form method="post">
                                        <select name="decide" id="decide">
                                             <option value="Accepted">Accept</option>
                                   
                                             <option value="Rejected">Reject</option>
                                             
                                        </select>
                                        <input type="hidden" name="lid" value="<?php echo $row3['lid']; ?>">
                                        <td><input type="submit" name ="decide_leave" value="Submit"></td>
                              </form></td>
                    </tr>
                <?php endwhile; ?>
            </table>
        </div>
               

          </div>

     </div>
</div>

</div>
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

<?php
if (isset($_POST['insertdata'])) {
     //$conn = mysqli_connect("localhost:3307","root","admin123","easycode");
     $conn = mysqli_connect("localhost:3307", "root", "admin123", "truventa");


     $id = $_POST['id'];
     $type = $_POST['type'];
     $fdate = $_POST['fdate'];
     $duration = $_POST['duration'];
     $remarks = $_POST['remarks'];

     $sql = "INSERT INTO leaves(id,type,fdate,duration,remarks) VALUES ('$id','$type','$fdate','$duration','$remarks')";


     $sql1 = "SELECT * FROM leaves";
     $result = $mysqli->query($sql1);


     mysqli_query($conn, $sql);
     if (mysqli_error($conn))
          echo "Record insertion error";
     else
          echo "Record added successfully.";
}

?>
