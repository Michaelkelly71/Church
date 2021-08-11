<?php include('server.php') ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Edit Users</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <style>
            a:link, a:visited {
                background-color: #5F9EA0;
                color: white;
                padding: 10px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 15px;
                border: none;
                border-radius: 5px;
            }
            a:hover, a:active {
                background-color: #407173;
            }
        </style>
    </head>
    <body class="body">
    <div class="header">
        <h2>Edit User</h2>
    </div>

    <form  method="post" action="editusers.php">

        <?php include ('errors.php'); ?>
        <div class="input-group">
            <label>ID</label>
            <label>
                <input type="number" name="ID" min="0">
            </label>
        </div>
        <div class="input-group">
            <label>Username</label>
            <label>
                <input type="text" name="username" value="<?php echo $username; ?>">
            </label>
        </div>
        <div class="input-group">
            <label>Password</label>
            <label>
                <input type="password" name="password_1">
            </label>
        </div>
        <div class="input-group">
            <label>Confirm Password</label>
            <label>
                <input type="password" name="password_2">
            </label>
        </div>
        <div class="input-group">
            <label>Account Type</label>
            <label>
                <input type="text" name="acctype">
            </label>
        </div>
        <div class="input-group">
            <button type="submit" name="update" class="btn">Update</button>
        </div>
        <div class="home">
            <p>
                To go back, <a href="profileadmin.php">Click Here</a>
            </p>
        </div>

    </form>
    </body>
    </html>
<?php

