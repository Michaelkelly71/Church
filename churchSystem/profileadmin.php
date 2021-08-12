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
    <title> Church Management Site</title>
    <link href="profile.css" rel="stylesheet" type="text/css">

</head>
<body>
<header>
    <div class="row">
        <div class="logo">
            <img src="VVU%20logo.png" style="width:100px; height:80px" alt="logo">
        </div>
    </div>

    <div class="content">
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
        <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <p> <a href="index.php?logout='1'" style="text-decoration: none; color: red;">logout</a> </p>
        <?php endif ?>
    </div>

    <div class="button">
        <a href="accountadmin.php" class="btn btn-row">Home</a>
        <a href="events.php" class="btn btn-row">Events</a>
        <a href="viewmembers.php" class="btn btn-row">Members</a>
        <a href="finances.php" class="btn btn-row">Finances</a>
    </div>

    <div class="hero">
        <h1>Dashboard</h1>
    </div>

    <div class="button">
        <a href="viewusers.php" class="btn btn-one">View Users</a>
        <a href="addusers.php" class="btn btn-one">Add User</a>
        <a href="editusers.php" class="btn btn-one">Edit Users</a>
        <a href="deleteuser.php" class="btn btn-one">Delete User</a>
        <a href="editmembers.php" class="btn btn-one">Edit Members</a>
        <a href="deletemembers.php" class="btn btn-one">Delete Member</a>
        <a href="editevents.php" class="btn btn-two">Edit Events</a>
        <a href="managefinances.php" class="btn btn-three"> Manage Finances </a>
    </div>

</header>
</body>
</html>