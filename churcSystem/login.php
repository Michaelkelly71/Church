<?php 
include('server.php') ;
include('design.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css">
    <style>
        a:link, a:visited {
            color: #5F9EA0;
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
    </style>
</head>
<body class="body" style="background-color: lightgrey;">
    
        <div class="home">
            <p>
                <a href="index.php">Home</a>
            </p>
        </div>
        
<div align="center">
            <img src="adventist-en-centered--denim.png" style="height:25%; width:30%;">
               <h2>Login</h2>
    <form method="post" action="login.php">
              <?php include ('errors.php'); ?>

      <div class="wrapper col2">
         <div id="container">
     
         <div class="form_group" style="height: 30px; width: 28%;">
           <label width="34%" style="color: darkblue; padding-right:206px;">Login ID</label>
             <input type="text" name="username" id="username" placeholder="Enter your ID"  style="background-color: #e4e4e4; border-radius: 15px; border: none;" >
         </div><br><br><br>
      
       
         <div class="form_group" style="height: 30px; width: 28%;">
           <label style="color: darkblue; padding-right:206px;">Password</label>
             <input type="password" name="password" id="password" placeholder="Enter your password"  style="background-color: #e4e4e4; border-radius: 15px; border: none;" >
         </div>
        <br><br>

     
          <div class="input-group">
             <button type="submit" class="btn" name="login" style="background-color: green; border-radius: 13px; border: none; height: 20px; width: 2%;" >Login</button>
        </div>

         <strong>
            <p>
              <a href="forgot%20password.php">Reset Password</a>
            </p>

           <p>
             <a href="registration.php">Sign Up</a>
           </p>
           </strong>
         <br> 
        </div>
      </div>
    </form>
</div>

 </body>
</html>

