<?php

// Username is root 
$user = 'root';
$password = '';

// Database name is gfg 
$database = 'truventa';

// Server is localhost with 
// port number 3308 
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

// SQL query to select data from database 
$sql = "SELECT * FROM leaves";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <style>
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

    * {
      box-sizing: border-box;
    }

    /* Create two unequal columns that floats next to each other */
    .column {
      float: left;
      padding: 10px;
      height: 500px;
      /* Should be removed. Only for demonstration */
    }

    .left {
      width: 35%;
      margin-top: 10%;
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
      margin-top: 15%;
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
  </style>
</head>

<body>



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
        <form action="create.php" method="POST">
          <table class="formtable">
            <tr>
              <th class="tablehead" rowspan="1" colspan="3">Create Account</th>

            </tr>
            <tr class="rowentity">
              <td class="entityd">Designation</td>

              <td class="entityr" rowspan="1" colspan="3">
                <input type="radio" name="designation" value="mr">
                <label for="mr">MR</label><br>
                <input type="radio" name="designation" value="stockist">
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
      <h1>second page</h1>
      <div class="main">
        <table class="table table-striped table-hover">
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
                <a class="btn btn-success" href="index1.php?edit=<?php echo $row['id']; ?>">Click Here</a>
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
      <div style="background-color:#E4E5E6;width:40%;
position:relative;top:-400px;
margin-left:40%;padding:30px;padding-top:7px;border: 2px solid black;">
        <form action="create.php" method="post" style="margin-left:10%;">
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
      <section>

        <!-- TABLE CONSTRUCTION-->
        <table id="database" class="table table-striped table-hover" style="position:relative;top:-350px">
          <thead class="bg-success" style="background-color:#5cb85c">
            <tr>
              <th>ID</th>
              <th>LEAVE ID</th>
              <th>Type</th>
              <th>From</th>
              <th>Duration</th>

              <th>PL Balance</th>
            </tr>


          </thead>
          <?php   // LOOP TILL END OF DATA  
          while ($rows = $result->fetch_assoc()) {
          ?>
            <tr>
              <!--FETCHING DATA FROM EACH  
                    ROW OF EVERY COLUMN-->

              <td><?php echo $rows['id']; ?></td>
              <td><?php echo $rows['lid']; ?></td>
              <td><?php echo $rows['type']; ?></td>
              <td><?php echo $rows['fdate']; ?></td>
              <td><?php echo $rows['duration']; ?></td>
              <td><?php echo $rows['pl_bal']; ?></td>




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
  $name = $_POST['name'];
  $mobile = $_POST['mobile'];
  $pin = $_POST['pin'];



  $sql = "INSERT INTO employee (designation,id,name,mobile,pin) VALUES('$designation','$id','$name','$mobile','$pin')";
  mysqli_query($connect, $sql);


  echo $designation;
  echo $id;
  echo $name;
  echo $mobile;
  echo $pin;
}

?>