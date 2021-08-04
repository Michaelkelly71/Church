<?php include('server.php') ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Reset Password</title>
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
        <h2>Reset Password</h2>
    </div>
    <form method="post" action="forgot%20password.php">
        <?php include ('errors.php'); ?>

        <div class="input-group">
            <label>Username</label>
            <label>
                <input type="text" name="username" >
            </label>
        </div>
        <div class="input-group">
            <label>New Password</label>
            <label>
                <input type="password" name="password_3" >
            </label>
        </div>
        <div class="input-group">
            <label>Confirm Password</label>
            <label>
                <input type="password" name="password_4">
            </label>
        </div>
        <div class="resetbtn">
            <button type="submit" class="btn" name="reset">Reset Password</button>
        </div>
        <div class="home">
            <p>
                Return home? <a href="index.php">Click Here</a>
            </p>
        </div>
    </form>

    </body>
    </html>
<?php
