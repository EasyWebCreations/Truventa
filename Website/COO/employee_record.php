<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style>
        .main {
            width: 80%;
            margin-left: 5%;
            margin-top: 5%;
        }
    </style>
</head>

<body>
    <?php include('connection.php'); ?>
    <?php
    $eid = $_GET['edit'];
    echo $eid;
    $result = $connect->query("SELECT * FROM mr_per where MRID = $eid");
    ?>
    <div class="main">
        <table class="table table-striped table-hover">
            <thead class="bg-success">
                <tr>
                    <th scope="col">Month</th>
                    <th scope="col">Target</th>
                    <th scope="col">Achieved</th>
                    <th></th>
                    <th>Leaves</th>
                    <th></th>
                </tr>

                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>PL</th>
                    <th>CL</th>
                    <th>SL</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = $result->fetch_assoc()) : ?>
                    <tr>
                        <td><?php echo $row['Month']; ?></td>
                        <td><?php echo $row['Target']; ?></td>
                        <td><?php echo $row['Accomplishment']; ?></td>
                        <td><?php echo $row['SickLeaves']; ?></td>
                        <td><?php echo $row['CasualLeaves']; ?></td>
                        <td><?php echo $row['UnpaidLeaves']; ?></td>
                    </tr>
                <?php endwhile;
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>