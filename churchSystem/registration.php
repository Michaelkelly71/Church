<?php include('server.php'); 
include('design.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Member registration</title>
    <link rel="stylesheet" type="text/css">
    <style>
        a:link, a:visited {
            color: #ffffff;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 15px;
            border: none;
            border-radius: none;
        }
        a:hover, a:active {
            background-color: #407173;
        }
        button:hover, button:active{
            background-color:orange;
        }

    </style>
</head>
<body class="body" style="background-color: #08A0CA;">
    <div align="center">
    <img src="adventist-en-centered--denim.png" style="height:25%; width:30%;">
               <h2 style="color:#ffffff">Register</h2>
    <img src="adventist-en-centered--denim2.png" style="height:25%; width:30%;">
    <h2 style="color:#ffffff">Register</h2>

    <form  method="post" action="registration.php">

        <?php include ('errors.php'); ?>

        <div class="input-group" style="height: 30px; width: 28%;">
            <label width="34%" style="color: #ffffff; padding-right:230px;">Username</label>
            <label>
                <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Create an ID"  style="background-color: #e4e4e4; border-radius: 15px; border: none;">
            </label>
        </div><br><br>

        <div class="input-group" style="height: 30px; width: 28%;">
            <label width="34%" style="color: #ffffff; padding-right:230px;">Password</label>
            <label>
                <input type="password" name="password_1" placeholder="create a password" style="background-color: #e4e4e4; border-radius: 15px; border: none;">
            </label>
        </div><br><br>

        <div class="input-group" style="height: 30px; width: 28%;">
            <label width="34%" style="color: #ffffff; padding-right:180px;">Confirm Password</label>
            <label>
                <input type="password" name="password_2" placeholder="confirm your password"  style="background-color: #e4e4e4; border-radius: 15px; border: none;">
            </label>
        </div><br><br>

        <div class="input-group">
        <button type="submit" class="btn" name="register" style="background-color: #F4BF55; color:#ffffff; border-radius: 16px; border: none; height: 40px; width: 10%;" >
        Register
         </button>
            
        </div>
        <div class="login">
            <p>
                Already a member? <a href="login.php">Login</a>
            </p>
        </div>
        <div class="home" style="#F4BF55">
            <p>
                Return home? <a href="index.php">Click Here</a>
            </p>
        </div>
    </form>
</div>
</body>
</html>
<?php
