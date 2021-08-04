<?php
session_start();
$db = mysqli_connect("localhost", "root", "", "ch");
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
     

</div><br>

<center>
        <div id="breadcrumb">
          <h2 class="first">Sabbath Program</h2>
        </div>
  <form method="post" action="" name="frmevents" onSubmit="return validateform()">
      <div class="wrapper col4">

        <div id="container"  style="width:75%">
         <table  class="table table">
          <tbody>
            <tr>
              <td width="34%">Coordinator</td>
              <td width="66%"><input type="text" name="Coordinator" id="Coordinator"  value="<?php echo $Coordinator; ?>"/></td>
            </tr>

        <tr>
          <td>Scripture Reading</td>
          <td><input type="text" name="scriptureReader" id="scriptureReader" value="<?php echo $scriptureReader; ?>" /></td>
        </tr>

        <tr>
          <td>TitheOffering</td>
          <td><input type="text" name="TitheOffering" id="TitheOffering" value="<?php echo $TitheOffering;?>" /></td>
        </tr>

        <tr>
          <td>Prayer</td>
          <td><input type="text" name="Prayer" id="Prayer" value="<?php echo $Prayer;?>" /></td>
        </tr>
        <tr>
          <td>Speaker</td>
          <td><input type="text" name="Speaker" id="Speaker" value="<?php echo $Speaker; ?>" /></td>
        </tr>
        <tr>
          <td>Topic</td>
          <td>
            <textarea name="Topic" id="Topic" cols="45" rows="5"><?php echo $Topic; ?></textarea>
          </td>
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
          <td colspan="2" align="center">
            <button type="submit" class="btn" name="submit" style="border-radius:11px; border: none; background-color: green; color:white;height: 35px; width: 11%;">Submit</button>
          </td>
        </tr>

        </tbody>
         </table>
    
           <p>&nbsp;</p>
        </div>
      </div>
  </form>
</center>

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
  else if(document.frmevents.scriptureReader.value == "")
  {
    alert("This field should not be empty...");
    document.frmevents.scriptureReader.focus();
    return false;
  }
  else if(!document.frmevents.scriptureReader.value.match(alphaspaceExp))
  {
    alert("Invalid entry alphabets only..");
    document.frmevents.scriptureReader.focus();
    return false;
  }
  else if(document.frmevents.TitheOffering.value == "")
  {
    alert("Field should not be empty..");
    document.frmevents.TitheOffering.focus();
    return false;
  }
  else if(document.frmevents.Prayer.value == "")
  {
    alert(" field should not be empty..");
    document.frmevents.Prayer.focus();
    return false;
  }

  else if(document.frmevents.Speaker.value == "")
  {
    alert("field should not be empty..");
    document.frmevents.Speaker.focus();
    return false;
  }
  
  else if(!document.frmevents.Speaker.value.match(alphaspaceExp))
  {
    alert("field is not valid..");
    document.frmevents.Speaker.focus();
    return false;
  }
  else if(document.frmevents.Topic.value == "")
  {
    alert("Field should not be empty..");
    document.frmevents.Topic.focus();
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