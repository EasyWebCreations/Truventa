<?php

session_start();

if (!isset($_SESSION['name'])) {
    header('location:../login.php');
    exit;
}

$curr_emp = $_GET['edit'];

$emp_q = "SELECT * FROM `employee` WHERE id = $curr_emp ";
$conn = mysqli_connect("localhost", "root", "", "truventa");
$result_emp = $conn->query($emp_q);




if (isset($_POST['insert_data'])) {
    //$conn = mysqli_connect("localhost:3307","root","admin123","easycode");
    $conn = mysqli_connect("localhost", "root", "", "truventa");


    $id = $_SESSION['id'];
    $type = $_POST['type'];
    $fdate = $_POST['fdate'];
    $duration = $_POST['duration'];
    $remarks = $_POST['remarks'];

    $pl_query = "SELECT SUM(duration) FROM `leaves` WHERE id = $id AND decision = 'accepted'";
    $pl_result = $conn->query($pl_query);
    $fetched_result = $pl_result->fetch_assoc();
    $past_leaves = $fetched_result["SUM(duration)"];
    $plb = 18 - $past_leaves;
    // echo $plb;
    // echo $accepted_leaves;
    $sql = "INSERT INTO leaves(id,designation,`type`,fdate,duration,remarks,decision,pl_bal) VALUES ('$id','MR','$type','$fdate','$duration','$remarks','Pending',$plb)";

    $sql1 = "SELECT * FROM leaves ORDER BY fdate DESC";
    $result = $conn->query($sql1);


    mysqli_query($conn, $sql);
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
            var today1 = (day) + "-" + (month) + "-" + now.getFullYear()

            $('#datePicker').val(today);
            document.getElementById('defaultdate').innerHTML = today1;
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

        table.table {
            border-left: 2px solid black;
            border-right: 2px solid black;
            border-top: 2px solid black;
            border-bottom: 2px solid black;
            width: 60%;
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
            font-family: 'Gill Sans', 'Gill Sans MT', ' Calibri', 'Trebuchet MS', 'sans-serif';
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

        /* Style of Order Now section in MR */

        .outerbox {
            width: 40%;
            background-color: rgb(228, 229, 230);
            float: right;
            margin-top: -4.5%;
            margin-right: 15%;
            padding: 3%;
            /* display: flexbox; */
        }

        .dt {
            align-items: center;
            margin: auto;
            margin-bottom: 5%;
            padding: 2%;
            /* padding-left: 15%; */
            width: 80%;
            font-size: xx-large;
            font-weight: bolder;
            background-color: white;
            text-align: center;
        }

        .fas {
            z-index: 2;
        }

        .subform {
            margin: auto;
            margin-bottom: 3%;
            /* background-color: yellow; */
            width: 84%;
            /* padding: 2%; */
        }

        .field {
            width: 35%;
            font-size: x-large;
            padding: 2%;
            /* margin-left: 8%; */
            display: inline;
            /* background-color: brown; */
        }

        .c1 {
            float: left;
            width: 35%
        }

        .c2 {
            /* float: right; */
            margin-left: 9%;
            width: 18%;
        }

        .c3 {
            margin-left: 7%;
            width: 21%;
            /* margin-left: 15%; */
        }

        select,
        input {
            margin-bottom: 2%;
        }

        label {
            font-weight: bold;
            font-size: larger;
        }

        #submit {
            float: right;
            background-color: rgb(98, 158, 39);
            color: aliceblue;
            padding: 2%;
            width: 40%;
            font-size: xx-large;
            font-weight: bolder;
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
            <h1><?php 
            echo $result_emp['id'];  
            ?></h2>
                <table class="slide-box">

                    <table class="table2" class="menu">
                        <tr>
                            <th class="iconbox"><i class="fa fa-shopping-basket"></i></th>
                            <td class="borderbox">
                                <a class="tabbuttons1" id="defaultOpen" onclick="openCity(event, 'one')" style="color:black"> <b class="on">Order Now </b></a><br />
                            </td>
                        </tr>
                    </table>
                    <table class="table2">
                        <tr>
                            <th class="iconbox"><i class="fa fa-truck"></i></th>
                            <td class="borderbox">
                                <a class="tabbuttons1" onclick="openCity(event, 'two')" style="color:black"> <b>Track
                                        Orders </b></a>
                            </td>
                        </tr>
                    </table>
                    <table class="table2">
                        <tr>
                            <th class="iconbox"><i class="fa fa-history"></i></th>
                            <td class="borderbox">
                                <a class="tabbuttons1" onclick="openCity(event, 'three')" style="color:black"> <b>Order
                                        History </b></a>
                            </td>
                        </tr>
                    </table>
                    <table class="table2">
                        <tr>
                            <th class="iconbox"><i class="fa fa-bar-chart"></i></th>
                            <td class="borderbox">
                                <a class="tabbuttons1" onclick="openCity(event, 'four')" style="color:black"> <b>Your
                                        Progress </b></a>
                            </td>
                        </tr>
                    </table>
                    <table class="table2">
                        <tr>
                            <th class="iconbox"><i class="material-icons">assignment</i></th>
                            <td class="borderbox">
                                <a class="tabbuttons1" onclick="openCity(event, 'five')" id="LeaveSection" style="color:black"> <b>Apply
                                        for Leave </b></a>
                            </td>
                        </tr>
                    </table>
            </div>

            </table>



            <div ID="one" class="tabcontent">
                <div class="outerbox">
                    <form method="post" action="submit.php">
                        <p class="dt" id="defaultdate"></p>


                        <div class="subform">
                            <select class="field c1" name="products[]" placeholder="Product ">
                                <option value="Hajmola ">Hajmola</option>
                                <option value="Dhauti Yog ">Dhauti Yog</option>
                                <option value="Churan ">Churan</option>
                            </select>
                            <input class="field c2" type="number" name="quantities[]" placeholder="Qty.">
                            <input class="field c3" type="number" name="prices[]" placeholder="Price">


                            <a href="javascript:void(0)" class="field addMore"><span aria-hidden="false "></span> <i class="fas fa-plus" style="color:black;"></i></a>

                        </div>
                        <input class="dt" placeholder="Remarks (if any)" style="margin-left:8%;margin-top: 3%;width: fit-content;"></input>
                        <p id="COO" class="btn btn-primary" >You can't Place Order</p>
                        <input id="submit" class="btn btn-primary" type="hidden" name="submit" value="Place Order " />


                    </form>
                    <div class="subformCopy" style="display: none;">
                        <select class="field c1" name="products[]" placeholder="Product ">
                            <option value="Hajmola ">Hajmola</option>
                            <option value="Dhauti Yog ">Dhauti Yog</option>
                            <option value="Churan ">Churan</option>
                        </select>
                        <input class="field c2" type="number" name="quantities[]" placeholder="Qty.">
                        <input class="field c3" type="number" name="prices[]" placeholder="Price">
                        <div class="field">
                            <a href="javascript:void(0)" class="remove"><span aria-hidden="false "></span> <i class="fas fa-minus" style="color:black;"></i></a>
                        </div>
                    </div>
                </div>

                <script>
                    $(document).ready(function() {
                        //group add limit
                        var maxGroup = 3;

                        //add more fields group
                        $(".addMore").click(function() {
                            if ($('body').find('.subform').length < maxGroup) {

                                var fieldHTML = '<div class="subform">' + $(".subformCopy").html() + '</div>';
                                $('body').find('.subform:last').after(fieldHTML);
                            } else {
                                alert('Maximum' + maxGroup + ' groups are allowed.');
                            }
                        });

                        //remove fields group
                        $("body").on("click ", ".remove ", function() {
                            $(this).parents(".subform").remove();
                        });
                    });
                </script>
            </div>

            <div ID="two" class="tabcontent">
                <?php include('connectDB.php'); ?>
                <?php
                $id = $_SESSION['id'];
                $result = $connect->query("SELECT * FROM orders where mrid=$id  ORDER BY `date` DESC");
                ?>

                <div class="row " style="margin: 5%;">
                    <table class="table table-striped table-hover">
                        <thead class="bg-success" style="background-color: #A4C31D;">
                            <tr>
                                <th>Date</th>
                                <th>OrderID</th>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <?php
                        while ($row = $result->fetch_assoc()) : ?>
                            <tr>
                                <td><?php echo $row['date']; ?></td>
                                <td><?php echo $row['ord_id']; ?></td>
                                <td><?php echo $row['product']; ?></td>
                                <td><?php echo $row['qty']; ?></td>
                                <td><?php echo $row['status']; ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </table>
                </div>

            </div>
            <div ID="three" class="tabcontent">
                <?php include('connectDB.php'); ?>
                <?php
                $result = $connect->query("SELECT * FROM orders where mrid=$id ORDER BY `date` DESC");
                ?>

                <div class="row " style="margin: 5%;">
                    <table class="table table-striped table-hover">
                        <thead class="bg-success" style="background-color: #A4C31D;">
                            <tr>
                                <th>Date</th>
                                <th>OrderID</th>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <?php
                        while ($row = $result->fetch_assoc()) :
                            if ($row['status'] == 'Delivered') {
                        ?>
                                <tr>
                                    <td><?php echo $row['date']; ?></td>
                                    <td><?php echo $row['ord_id']; ?></td>
                                    <td><?php echo $row['product']; ?></td>
                                    <td><?php echo $row['qty']; ?></td>
                                    <td><?php echo $row['status']; ?></td>
                                </tr>
                        <?php }
                        endwhile; ?>
                    </table>
                </div>
            </div>

            <div ID="four" class="tabcontent">
                <!-- ADD YOUR PROGRESS -->
            </div>

            <div ID="five" class="tabcontent">

                <div class="container" style="margin-left: 30%;margin-top: -5%;">
                    <ul id="navigation" class="nav nav-pills" style="margin-left: 30%;">

                        <li class="first_back" style="border: 2px solid;border-top-left-radius: 25px;border-bottom-left-radius: 25px;">

                            <a data-toggle="pill" id="first" href="#menu1" class="li first" style="font-size: 20px;color:black;">New Application</a>
                        </li>
                        <li class="second_back" id="li" style="background-color:lightgray;border: 2px solid;border-top-right-radius: 25px; border-bottom-right-radius: 25px;">
                            <a data-toggle="pill" class="second" id="second" href="#menu2" style="font-size: 20px;color:black;">Application History</a>
                        </li>

                    </ul>

                    <div class="tab-content">

                        <div id="menu1" class="tab-pane fade">
                            <h3 style="color:white">Menu 1</h3>
                            <form action="MR.php" id="form" style="background-color:#E4E5E6;border:2px solid black" method="POST">
                                <div style="display: flex;">

                                    <input type="number" style="width: 45%;margin-right:10%;height: 40px;" id="quantity" value="$id" name="id" placeholder="Employee ID">

                                    <br>
                                    <div style="display:flex;background-color:white;width:200px;height: 40px;padding:8px">
                                        <p style="font-size:15px;margin-left:5%;">Type</p>
                                        <select style="width: 15%;width:25%;background-color:#A4C31D;;color:black;margin-left:35%;" id="type" name="type" placeholder="TYPE">
                                            <option value="PL">PL</option>
                                            <option value="CL">CL</option>
                                            <option value="SL">SL</option>

                                        </select>
                                    </div>

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
                                <input style="width:30%;height:40px;background-color:#A4C31D;display:None" type="Hidden" name="insert_data">
                            </form>

                        </div>
                        <div id="menu2" class="tab-pane fade">

                            <!-- hjjhds -->


                            <section>
                                <?php include('connectDB.php'); ?>
                                <?php
                                $result = $connect->query("SELECT * FROM leaves ORDER BY `lid` DESC");
                                ?>

                                <table id="database" class="table-striped table-hover">
                                    <thead class="bg-success" style="background-color:#5cb85c">
                                        <tr>
                                            <th>LID</th>
                                            <th>Type</th>
                                            <th>From</th>
                                            <th>Duration</th>
                                            <th>Decision</th>
                                            <th>PL Balance</th>
                                            <th>Remark</th>
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
                                            <td><?php echo $rows['decision']; ?></td>
                                            <td><?php echo $rows['pl_bal']; ?></td>
                                            <td><?php echo $rows['remarks']; ?></td>
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
                            <p>Fusce at libero iaculis, venenatis augue quis, pharetra lorem. Curabitur ut dolor eu elit
                                consequat ultricies.</p>

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