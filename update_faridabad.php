<?php

// Turn off all error reporting
error_reporting(0);
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}



$servername = "localhost";
$username = "vk";
$password = "vk2020";
$dbname = "sattaopen";
$id=$_GET['id'];
$faridabad_number=$_POST['faridabad_number'];
$faridabad_date=$_POST['faridabad_date'];
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE faridabad SET faridabad_number='$faridabad_number', faridabad_date='$faridabad_date'   WHERE id='$id' ");
//$sql="DELETE FROM numbers WHERE id='$id'";
//UPDATE `numbers` SET `id`=[value-1],`num_name`=[value-2],`date`=[value-3] WHERE 1
$message = "<p style='color:green; font-size:25px;'> Record Modified Successfully </p>";
}
$result = mysqli_query($conn,"SELECT * FROM faridabad WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Numbers Data For Faridabad</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
</head>
<body>
<center>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		
		
		</div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="background-color:wheat;">
		
		<h3 style="background-color:teal; color:white; font-weight:bold;"> Update Numbers for Faridabad  </h3>
		
<form name="frmUser" method="post" action="" class="form-group">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">

</div>
<span style="font-size:20px; font-weight:bold;" > Serial Number: </span> <br>
<input type="hidden" name="id" readonly class="form-control"    value="<?php echo $row['id']; ?>">
<input type="text" disabled name="id"  class="form-control"  value="<?php echo $row['id']; ?>">
<br>
<span style="font-size:20px; font-weight:bold;" >Number For Game </span> <br>
<input type="text" name="faridabad_number"  class="form-control" value="<?php echo $row['faridabad_number']; ?>"> 
<br>
<span style="font-size:20px; font-weight:bold;" >Date:</span><br>
<input type="text" name="faridabad_date"  class="form-control" value="<?php echo $row['faridabad_date']; ?>">
<br>
<input type="submit" name="submit" value="Update" class="buttom">

<br><br><br><br>
<a href="faridabad.php"> Click Here To Back</a>
</form>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
</div>

</center>
</body>
</html>



