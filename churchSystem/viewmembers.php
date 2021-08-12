<?php
$db = mysqli_connect("localhost", "root", "mack1234", "ch");
$query ="select * from members ORDER BY id";
$result = mysqli_query($db, $query);
$query2 ="select * from contact ORDER BY id";
$result2 = mysqli_query($db, $query2);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Members</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

</head>
<body>
    <div class="wrapper col3" style="padding:18px">
    <div class="home">
            <p>
                <<<<.Go Back <a href="profileuser.php">Click Here</a>
            </p>
        </div>
  
<section class="container">
           <h4 style="padding-left: 80%;">Search Members-<input type="search" class="light-table-filter" data-table="order-table" placeholder="Filtrer" />
           </h4>
    </div>


<div class="container" style="width: 900px">
    <h2 align="center">Members Data</h2>
    <div class="table-responsive" id="employee_table">
        <table class="table table-striped">
            <tr>
                <th width="5%">ID</th>
                <th width="15%">FName</th>
                <th width="18%">LName</th>
                <th width="17%">Email</th>
                <th width="20%">Address</th>
                <th width="5%">DOB</th>
                <th width="10%">Gender</th>
                <th width="20%">Phone Number</th>
                <th width="20%">M.I</th>
                <th width="20%">Position</th>
            </tr>
            <?php

            while($row = mysqli_fetch_array($result) and $row2 = mysqli_fetch_array($result2))

            {
                ?>
                <tr>
                    <td ><?php echo $row["ID"]; ?></td>
                    <td><?php echo $row["FName"]; ?></td>
                    <td><?php echo $row["LName"]; ?></td>
                    <td><?php echo $row2["Email"]; ?></td>
                    <td><?php echo $row["Address"]; ?></td>
                    <td><?php echo $row["Date of Birth"]; ?></td>
                    <td><?php echo $row["Gender"]; ?></td>
                    <td><?php echo $row2["Number"]; ?></td>
                    <td><?php echo $row["M.I"]; ?></td>
                    <td><?php echo $row["Position"]; ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</div>
</section>
</body>
</html>