<?php
session_start();

if (!isset($_SESSION['name'])) {
    header('location:../login.php');
    exit;
}

if (isset($_POST['update_leave'])) {
    $conn = mysqli_connect("localhost", "root", "", "truventa");
    $lid = $_POST['lid'];
    $update = $_POST['update'];
    $sql2 = "UPDATE `leaves` SET `decision`='$update' WHERE `lid` = $lid ";
    $resultt = $conn->query($sql2);
    }

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

        * {
            box-sizing: border-box;
        }

        .column {
            float: left;
            padding: 10px;
            height: 500px;
            /* Should be removed. Only for demonstration */
        }

        .left {
            width: 35%;
            margin-top: 5%;
        }

        .right {
            width: 65%;

        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .formtable {
            margin-top: -5%;
            border: 1px solid black;
            width: 65%;
            margin-left: 20%;
            border-collapse: collapse;

        }

        .tablehead {
            height: 80px;
            font-size: 30px;
            text-align: center;
            background-color: #9cc400;
            color: white;

        }

        .iconbox {
            text-align: center;
            font-size: 35px;
            width: 55px;
            height: 50px;
        }

        .table2 {
            border: 1px solid black;
            width: 70%;
            margin-left: 15%;
        }

        .table2:hover {
            background-color: #9cc400;
        }

        .borderbox {
            width: 80%;
            font-size: 25px;
        }

        .fa-bullseye {
            font-size: 35px;
        }

        .fa-user-plus {
            font-size: 30px;
        }

        .fa-address-book {
            font-size: 35px;
        }

        .fa-envelope-open {
            font-size: 30px;
        }

        .rowentity {
            background-color: #f0e8e8;
            height: 80px;
        }

        .buttonentity {
            background-color: #f0e8e8;
            text-align: center;
        }

        .dot {
            height: 50px;
            width: 50px;
            background-color: white;
            border-radius: 50%;
            display: inline-block;
            margin-bottom: 20px;
            border: 0.5px solid black;
            margin-left: 50%;
        }

        .entityd {
            text-align: center;
            font-size: 25px;
        }

        .fa-address-card {
            margin-top: 15px;
            margin-left: 10px;
            font-size: 24px
        }

        .fa-user-alt {
            margin-top: 13px;
            margin-left: 13px;
            font-size: 24px
        }

        .fa-phone {
            margin-top: 13px;
            margin-left: 13px;
            font-size: 24px
        }

        .fa-key {
            margin-top: 13px;
            margin-left: 13px;
            font-size: 24px
        }

        .fa-envelope {
            margin-top: 13px;
            margin-left: 13px;
            font-size: 24px
        }

        .submitbutton {
            width: 120px;
            height: 40px;
            border-radius: 18px;
            background-color: #9cc400;
            font-size: 16px;
            text-align: center;
            cursor: pointer;
            display: inline-block;
            border: 1px solid black;
        }

        .inputentity {

            color: black;
            height: 30px;
            border: 0.5px solid black;
            margin-bottom: 10%;
            width: 70%;
            background-color: #f9f5f5;
        }

        ::placeholder {
            color: black;
            text-align: center;
            font-size: 15px;
        }

        .entityr {
            display: flex;
            font-size: 20px;
            padding-top: 30px;

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

        #er2 {
            top: -520px;

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
                            <form action="logout.php" method="GET">
                                <button type="submit" name="logout" style="border: transparent;border-radius: 4px;color:white;float: right;padding: 11px;background-color: #A4C31D;">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>

            </div>
        </section>


        <div class="row">
            <div class="column left">
                <table class="table2">
                    <tr>
                        <th class="iconbox"><i class="fas fa-user-plus"></i></th>
                        <td class="borderbox"> <a class="tabbuttons1" onclick="openCity(event, 'one')" id="defaultOpen"> <b>Create Account </b></a><br /></td>
                    </tr>
                </table>
                <table class="table2">
                    <tr>
                        <th class="iconbox"><i class="fas fa-address-book"></i></th>
                        <td class="borderbox"><a class="tabbuttons1" onclick="openCity(event, 'two')"> <b>Employee Record </b></a></td>
                    </tr>
                </table>
                <table class="table2">
                    <tr>
                        <th class="iconbox"><i class="fa fa-bullseye"></i></th>
                        <td class="borderbox"><a class="tabbuttons1" onclick="openCity(event, 'three')"> <b>Set Target </b></a></td>
                    </tr>
                </table>
                <table class="table2">
                    <tr>
                        <th class="iconbox"><i class="fas fa-envelope-open"></i></th>
                        <td class="borderbox"><a class="tabbuttons1" onclick="openCity(event, 'four')"> <b>Leave Applications </b></a></td>
                    </tr>

                </table>


            </div>
            <div class="column right">

                <div ID="one" class="tabcontent">
                    <form action="hr.php" method="POST">
                        <table class="formtable">
                            <tr>
                                <th class="tablehead" rowspan="1" colspan="3">Create Account</th>

                            </tr>
                            <tr class="rowentity">
                                <td class="entityd">Designation</td>

                                <td class="entityr" rowspan="1" colspan="3">
                                    <input type="radio" name="designation" value="MR">
                                    <label for="mr">MR</label><br>
                                    <input type="radio" name="designation" value="Stock">
                                    <label for="stockist">Stockist</label><br>
                                </td>
                            </tr>

                            <tr class="rowentity">
                                <td class="entity"><span class="dot"><i class='far fa-address-card'></i></span></td>
                                <td class="entity" rowspan="1" colspan="2"><input class="inputentity" type="id" name="id" placeholder="ID"></td>

                            </tr>
                            <tr class="rowentity">
                                <td class="entity"><span class="dot"><i class='fas fa-user-alt'></i></span></td>
                                <td class="entity" rowspan="1" colspan="2"><input class="inputentity" type="name" name="name" placeholder="Name"></td>

                            </tr>
                            <tr class="rowentity">
                                <td class="entity"><span class="dot"><i class='fas fa-phone'></i></span></td>
                                <td class="entity" rowspan="1" colspan="2"><input class="inputentity" type="mobile" name="mobile" placeholder="Mobile No."></td>

                            </tr>
                            <tr class="rowentity">
                                <td class="entity"><span class="dot"><i class='fas fa-envelope'></i></span></td>
                                <td class="entity" rowspan="1" colspan="2"><input class="inputentity" type="email" name="email" placeholder="Email"></td>

                            </tr>
                            <tr class="rowentity">
                                <td class="entity"><span class="dot"><i class='fas fa-key'></i></span></td>
                                <td class="entity" rowspan="1" colspan="2"><input class="inputentity" type="password" name="pin" placeholder="PIN"></td>

                            </tr>
                            <tr class="rowentity">
                                <td class="buttonentity" rowspan="1" colspan="3"><input class="submitbutton" type="submit" name="create" value="create"></td>
                            </tr>

                        </table>
                    </form>
                </div>
            </div>
            <div ID="two" class="tabcontent">
                <!-- <h1>second page</h1> -->
                <div class="main" style=" position:absolute; top:200px; right:0%; width:80%; ">
                    <table id="er2" class="table table-striped table-hover">
                        <thead class="bg-success">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">ROLE</th>
                                <th scope="col">Name</th>
                                <th colspan="1">Action</th>
                            </tr>
                        </thead>
                        <?php
                        include('connectDB.php');
                        $result = $connect->query("SELECT * FROM employee");
                        ?>

                        <?php
                        while ($row = $result->fetch_assoc()) : ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['designation']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td>
                                    <a class="btn btn-success" href="employee_record.php?edit=<?php echo $row['id']; ?>">Click Here</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </table>
                </div>
            </div>
            <div ID="three" class="tabcontent">
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

                    $query = "INSERT INTO `mr_per`(`MRID`, `Target`,`Month`, `remarks`) VALUES ('$mrid','$target','$month','$remarks')";

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
                <div style="background-color:#E4E5E6;width:40%;
position:relative;top:-400px;
margin-left:40%;padding:30px;padding-top:7px;border: 2px solid black;">
                    <form action="hr.php" method="post" style="margin-left:10%;">
                        <h1 style="color:black">Set Target</h1>
                        <div style="display:flex">

                            <input style="font-weight:bolder;font-size:20px;width:40%;margin-right:10%" type="number" name="mrid" required placeholder="ID"><br><br>
                            <div style="background-color:white;height:40px;width:40%;display:flex">
                                <p style="font-size:20px;margin-top:7px;font-weight:bold;margin-left:20%;margin-right:20%">Type</p>
                                <select style="width: 30%;background-color:#A4C31D;color:black;font-size:15px;height:30px;margin-top:5px" id="type" name="type" placeholder="TYPE">
                                    <option value="MR">MR</option>

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
            </div>
            <div ID="four" class="tabcontent">
            <?php
                    include('connectDB.php');
                    $result = $connect->query("SELECT * FROM leaves where `decision`='Pending' AND `designation`!='HR' ORDER BY `fdate` DESC ");
            ?>
                <section>
                    <!-- TABLE CONSTRUCTION-->
                    <table id="database1" class="table table-striped table-hover" style="position:relative;top:-350px">
                        <thead class="bg-success" style="background-color:#5cb85c">
                            <tr>
                                <th>Leave Id</th>
                                <th>Emp ID</th>
                                <th>Desig</th>
                                <th>From</th>
                                <th>Duration</th>
                                <th>PL Bal</th>
                                <th>Remark</th>
                                <th>Status</th>
                                <th>Decision</th>
                            </tr>

                        </thead>
                        <?php   // LOOP TILL END OF DATA  
                        while ($rows = $result->fetch_assoc()) {
                        ?>
                            <tr>
                                <!--FETCHING DATA FROM EACH  
            ROW OF EVERY COLUMN-->

            <td><?php echo $rows['lid']; ?></td>
                                <td><?php echo $rows['id']; ?></td>
                                <td><?php echo $rows['designation']; ?></td>
                                <td><?php echo $rows['fdate']; ?></td>
                                <td><?php echo $rows['duration']; ?></td>
                                <td><?php echo $rows['pl_bal']; ?></td>
                                <td><?php echo $rows['remarks']; ?></td>
                                <td><form method="post">
                                        <select name="update" id="update">
                                            <option value="Pending">Pending</option>
                                            <option value="Accepted">Accept</option>
                                            <option value="Rejected">Reject</option>
                                        </select>
                                        <input type="hidden" name="lid" value="<?php echo $rows['lid']; ?>">
                                        <td><input type="submit" name ="update_leave" value="Submit"></td>
                                    </form>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </section>

            </div>
        </div>



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
include('connectDB.php');

if (isset($_POST['create'])) {
    $designation = $_POST['designation'];
    $id = $_POST['id'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $pin = $_POST['pin'];

    $hash_pin = password_hash($pin, PASSWORD_BCRYPT);

    $sql = "INSERT INTO employee (designation,id,name,mobile,pin,email) VALUES('$designation','$id','$name','$mobile','$hash_pin','$email')";
    mysqli_query($connect, $sql);


    // echo $designation;
    // echo $id;
    // echo $name;
    // echo $mobile;
    // echo $pin;
}

?>


<!-- FOOTER -->
<footer data-stellar-background-ratio="5" style="margin-top: 10%;">
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