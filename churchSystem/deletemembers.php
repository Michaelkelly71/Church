<?php include('server.php') ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Delete Member</title>
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
        <h2>Delete Member</h2>
    </div>

    <form  method="post" action="deletemembers.php">

        <?php include ('errors.php'); ?>
        <div class="input-group">
            <label>ID</label>
            <label>
                <input type="number" name="ID" min="0">
            </label>
        </div>

        <div class="input-group">
            <button type="submit" name="delete_member" class="btn">Delete</button>
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



