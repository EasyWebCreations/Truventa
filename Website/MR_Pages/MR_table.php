<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Student CV</title>
    <style>
        table.table {
            border-left: 2px solid black;
            border-right: 2px solid black;
            border-top: 2px solid black;
            border-bottom: 2px solid black;
        }
    </style>
</head>

<body>
    <?php include('connectDB.php'); ?>
    <?php
    $result = $connect->query("SELECT * FROM orders");
    ?>

    <div class="row " style="margin: 5%;">
        <table class="table table-striped table-hover">
            <thead class="bg-success">
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

</body>

</html>