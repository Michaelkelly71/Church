<?php
$db = mysqli_connect("localhost", "root", "", "ch");
$query = "select * from events";
$result = mysqli_query($db, $query);;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Events</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

</head>
<body>
    
<br /><br />
<div class="container" style="width:900px;">

    <br>
    <div class="home">
            <p>
                <<<<.Go Back <a href="profileuser.php">Click Here</a>
            </p>
        </div>

    <h1 align="center">Devine Service Officials</h1>
    <div class="table-responsive" id="employee_table">
        <table class="table table-striped">
            <tr>
                <th width="15%">Coordinator</th>
                <th width="15%">Scripture Reading</th>
                <th width="15%">Tithe & Offering</th>
                <th width="15%">Prayer</th>
                <th width="15%">Speaker</th>
                <th width="15%">Topic</th>
                <th width="15%">Date</th>
                <th width="15%">Day</th>
                <th width="5%">Time</th>    
            </tr>
            <?php

            while($row = mysqli_fetch_array($result))
            {
                ?>
                <tr>
                    <td ><?php echo $row["Coordinator"]; ?></td>
                    <td ><?php echo $row["scriptureReader"]; ?></td>
                    <td ><?php echo $row["TitheOffering"]; ?></td>
                    <td ><?php echo $row["Prayer"]; ?></td>
                    <td ><?php echo $row["Speaker"]; ?></td>
                    <td ><?php echo $row["Topic"]; ?></td>
                    <td ><?php echo $row["adDate"]; ?></td>
                    <td ><?php echo $row["Day"]; ?></td>
                    <td ><?php echo $row["adTime"]; ?></td>
                               
                </tr>
                <?php
            }
            ?>
        </table>
    </div>

    <?php
    $db = mysqli_connect("localhost", "root", "", "ch");
    $query="select * from sabbathSchool";
    $result = mysqli_query($db, $query);;
     ?>

    <h1 align="center">Sabbath School Officials</h1>
    <div class="table-responsive" id="employee_table">
        <table class="table table-striped">
            <tr>
                <th width="15%" align="center" >Coordinator</th>
                <th width="15%" align="center">Supretendent</th>
                <th width="15%" align="center">Prayer</th>
                <th width="15%" align="center">Date</th>
                <th width="15%" align="center">Day</th>
                <th width="5%" align="center">Time</th>    
            </tr>
            <?php

            while($row = mysqli_fetch_array($result))
            {
                ?>
                <tr>
                    <td ><?php echo $row["Coordinator"]; ?></td>
                    <td ><?php echo $row["Supretendent"]; ?></td>
                    <td ><?php echo $row["Prayer"]; ?></td>
                    <td ><?php echo $row["adDate"]; ?></td>
                    <td ><?php echo $row["Day"]; ?></td>
                    <td ><?php echo $row["adTime"]; ?></td>
                               
                </tr>
                <?php
            }
            ?>
        </table>
    </div>


<?php
$db = mysqli_connect("localhost", "root", "", "ch");
$query ="select * from members ORDER BY id";
$result = mysqli_query($db, $query);
$query2 ="select * from contact ORDER BY id";
$result2 = mysqli_query($db, $query2);
?>


    <h1 align="center">Members Data</h1>
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
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</div>
</body>
</html>
