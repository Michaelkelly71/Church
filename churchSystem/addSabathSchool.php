<?php
$db = mysqli_connect("localhost", "root", "", "ch");
include("server.php");
include("design.php");
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<div class="wrapper col3" style="padding:18px">
  <div class="home">
            <p>
                <<<<.Go Back <a href="profileuser.php">Click Here</a>
            </p>
        </div>

    <div class="first" align="center" >
      <h2>Sabbath school Program</h2>
    </div>  

</div><br>

    <form method="POST" action="submit" onSubmit="return validateform()">
      <?php include ('errors.php'); ?>
      <div class="wrapper col4">
  <div class="container" style="width:75%">
    <table  class="table table">
      <tbody>
        <tr>
          <td width="34%">Coordinator</td>
          <td width="66%"><input type="text" name="Coordinator" id="Coordinator"  value="<?php echo $Coordinator;?>"/></td>
        </tr>

        <tr>
          <td>Supretendent</td>
          <td><input type="text" name="Supretendent" id="Supretendent" value="<?php echo $Supretendent; ?>" /></td>
        </tr>

        <tr>
          <td>Prayer</td>
          <td><input type="text" name="Prayer" id="Prayer" value="<?php echo $Prayer; ?>" /></td>
        </tr>
       

         <tr>
          <td>Date</td>
          <td><input type="date" name="adDate" id="adDate" value="<?php echo $adDate; ?>" /></td>
        </tr>

         <tr>
          <td>Day</td>
          <td><input type="text" name="Day" id="Day" value="<?php echo $Day; ?>" /></td>
        </tr>

         <tr>
          <td>Time</td>
          <td><input type="time" name="adTime" id="adTime" value="<?php echo $adTime; ?>" /></td>
        </tr>


        <tr>
          <td colspan="2" align="center"><input type="submit" name="sabbathschool" id="submit" value="Submit" /></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
    </form>
    <p>&nbsp;</p>
 <div class="clear"></div>
 


<script type="application/javascript">
var alphaExp = /^[a-zA-Z]+$/; //Variable to validate only alphabets
var alphaspaceExp = /^[a-zA-Z\s]+$/; //Variable to validate only alphabets and space
var numericExpression = /^[0-9]+$/; //Variable to validate only numbers
var alphanumericExp = /^[0-9a-zA-Z]+$/; //Variable to validate numbers and alphabets
var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/; //Variable to validate Email ID 

function validateform()
{
  if(document.frmevents.Coordinator.value == "")
  {
    alert("name should not be empty..");
    document.frmevents.Coordinator.focus();
    return false;
  }
else if(!document.frmevents.Coordinator.value.match(alphaspaceExp))
  {
    alert("name not valid..");
    document.frmevents.Coordinator.focus();
    return false;
  }
  else if(document.frmevents.Supretendent.value == "")
  {
    alert("This field should not be empty...");
    document.frmevents.Supretendent.focus();
    return false;
  }
  else if(!document.frmevents.Supretendent.value.match(alphaspaceExp))
  {
    alert("Invalid entry alphabets only..");
    document.frmevents.Supretendent.focus();
    return false;
  }

  else if(document.frmevents.Prayer.value == "")
  {
    alert(" field should not be empty..");
    document.frmevents.Prayer.focus();
    return false;
  }
  
  
  else if(document.frmevents.adDate.value == "")
  {
    alert("Field should not be empty..");
    document.frmevents.adDate.focus();
    return false;
  }
  else if(document.frmevents.Day.value == "")
  {
    alert("Field should not be empty..");
    document.frmevents.Day.focus();
    return false;
  }

  else if(document.frmevents.adTime.value == "")
  {
    alert("Field should not be empty..");
    document.frmevents.adTime.focus();
    return false;
  }

  else
  {
    return true;
  }
}
</script>