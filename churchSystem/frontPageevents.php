<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Events</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/">

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <style>
        a:link, a:visited {
            background-color: #5F9EA0;
            color: white;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border: none;
            border-radius: 5px;
        }
        a:hover, a:active {
            background-color: #407173;
        }
        td{
            font-size: 15px;
        }
    </style>

</head>
    <body><br>
            <div class="home">
                <div class="row" style="padding: 40px;">
                    <p>
                        <a href="index.php">Go back</a>
                    </p>
                </div>
            </div>
     


    

<div class="container" style="width:1400px;">

    <?php
        $db = mysqli_connect("localhost", "root", "mack1234", "ch");
        $query="select * from sabbathSchool";
        $result = mysqli_query($db, $query);;
    ?>

    <h1 align="center" style="color:darkblue;">Sabbath School Officials</h1>
    <div class="table-responsive" id="employee_table">
        <table class="table table-striped">
            <tr>
                <th width="15%" style="background-color:lavenderblush; color: darkblue;">Coordinator</th>
                <th width="15%" style="background-color:lavenderblush; color: darkblue;">Supretendent</th>
                <th width="15%" style="background-color:lavenderblush; color: darkblue;">Prayer</th>
                <th width="15%" style="background-color:lavenderblush; color: darkblue;">Date</th>
                <th width="15%" style="background-color:lavenderblush; color: darkblue;">Day</th>
                <th width="5%" style="background-color:lavenderblush; color: darkblue;">Time</th>    
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
    
    
        
    <br><br><br>

    
    <?php
        $db = mysqli_connect("localhost", "root", "mack1234", "ch");
        $query = "select * from events";
        $result = mysqli_query($db, $query);
    ?>

    <h1 align="center" style="color:darkblue;">Devine Service Officials</h1>
        <div class="table-responsive" id="employee_table">
            <table class="table table-striped">
                <tr>
                    <th width="15%" style="background-color:lavenderblush; color: darkblue;">Coordinator</th>
                    <th width="15%" style="background-color:lavenderblush; color: darkblue;">Scripture Reading</th>
                    <th width="15%" style="background-color:lavenderblush; color: darkblue;">Tithe & Offering</th>
                    <th width="15%" style="background-color:lavenderblush; color: darkblue;">Prayer</th>
                    <th width="15%" style="background-color:lavenderblush; color: darkblue;">Speaker</th>
                    <th width="15%" style="background-color:lavenderblush; color: darkblue;">Topic</th>
                    <th width="15%" style="background-color:lavenderblush; color: darkblue;">Date</th>
                    <th width="15%" style="background-color:lavenderblush; color: darkblue;">Day</th>
                    <th width="5%" style="background-color:lavenderblush; color: darkblue;">Time</th>    
                </tr>
                
                <?php

                    while($row = mysqli_fetch_array($result))
                    {
                ?>
                        <tr>
                            <td ><?php echo $row["Coordinator"]; ?></td>
                            <td ><?php echo $row["scriptureReader"]; ?></td>
                            <td ><?php echo $row["TitheOffering"]  ; ?></td>
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

    <br><br><br>
   
</div>


</body>
</html>
