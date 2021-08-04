<?php include('server.php') ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Update Login</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <style>
            a:link, a:visited {
                background-color: #5F9EA0;
                color: white;
                padding: 10px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 20px;
                border: none;
                border-radius: 5px;
            }
            a:hover, a:active {
                background-color: #407173;
            }
        </style>
    </head>
    <body>
    <div class="header">
        <h2>Update Login</h2>
    </div>
    <form method="post" action="userloginupdate.php">
        <?php include ('errors.php'); ?>

        <div class="input-group">
            <label>Old Username</label>
            <label>
                <input type="text" name="username_1" >
            </label>
        </div>
        <div class="input-group">
            <label>New Username</label>
            <label>
                <input type="text" name="username_2" >
            </label>
        </div>
        <div class="input-group">
            <label>Old Password</label>
            <label>
                <input type="password" name="password_1" >
            </label>
        </div>
        <div class="input-group">
            <label>New Password</label>
            <label>
                <input type="password" name="password_2" >
            </label>
        </div>
        <div class="input-group">
            <label>Confirm Password</label>
            <label>
                <input type="password" name="password_3">
            </label>
        </div>
        <div class="resetbtn">
            <button type="submit" class="btn" name="update_login">Update</button>
        </div>
        <div class="home">
            <p>
                To go back, <a href="profileuser.php">Click Here</a>
            </p>
        </div>
    </form>

    </body>
    </html>
<?php

