<?php
    session_start();
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: index.php");
    }
?>
<html lang="en">
<head>
    <title>Church System</title>
    <link href="profile.css" rel="stylesheet" type="text/css">

</head>
<body>
<header>
        <div class="logo">
            <img src="adventist-en-centered--denim.png" style=" width: 80px; height: 70px;" ,top left no-repeat, alt="logo">
        </div>
    

    <div class="content" style="padding-top: -10%">
        <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success" >
            <h3>
                <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
            </h3>
        </div>
        <?php endif ?>

        <!-- logged in user information -->
        <?php  if (isset($_SESSION['username'])) : ?>
        <p class="hero" style="padding-left: 150px; ">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <br>
         <p style="padding-left:150px";><a class="btn btn-primary btn-xl js-scroll-trigger" role="button" href="index.php?logout='1'" style="background-color: red; color: ;">logout</a> </p>
        <?php endif ?>
    </div><br><br><br>

    <div class="button">
        <a href="accountuser.php" class="btn btn-row">Home</a>
        <a href="announcement.php" class="btn btn-row">Announcement</a>
        <a href="profileupdate.php" class="btn btn-row">Update Profile</a>
        <a href="userloginupdate.php" class="btn btn-row">Update Login Details</a>
    </div>

    <div class="hero">
        <h1>Glorious Saints Worship Center</h1>
        <h2> Dashboard</h2><br>
    </div>

<br><br><div class="hero">
 
        <h4>
        <a href="addSabathSchool.php"class="btn btn-row">Add Sabbath_School Officials</a>
        <a href="addDevineService.php"class="btn btn-row">Add Devine Service Officials</a>
        <a href="addMidWkP.php"class="btn btn-row">Add Mid-week Prayers Officials</a>
        </h4>
</div><br>

</div>
     <h4>
       <a href="addMidWkP.php" class="btn btn-row"></a>
     </h4>
 
        </div><br><br>

    <div class="hero">
       <h2>See Events</h2><br>
    </div>

       <br><br> <div class="hero" align="center" style="padding-right: 320px;">
            <a href="events.php" class="btn btn-row"> View Events</a>
            <a href="viewmembers.php" class="btn btn-row">View Members</a>
        </div>

</header>
</body>
</html>