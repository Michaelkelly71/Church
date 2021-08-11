<?php
$db = mysqli_connect("localhost", "root", "", "church_mgmt");
$query ="select * from finances ORDER BY Date";
$result = mysqli_query($db, $query);;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Finances</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
</head>
<body>
<br /><br />
<div class="container" style="width:900px;">
    <h1 align="center">Finance Data</h1>

    <div class="table-responsive" id="employee_table">
        <table class="table table-bordered">
            <tr>
                <th width="5%">Date</th>
                <th width="25%">Day</th>
                <th width="25%">Amount</th>
            </tr>
            <?php

            while($row = mysqli_fetch_array($result))
            {
                ?>
                <tr>
                    <td><?php echo $row["Date"]; ?></td>
                    <td><?php echo $row["Day"]; ?></td>
                    <td><?php echo $row["Amount"]; ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</div>
</body>
</html>