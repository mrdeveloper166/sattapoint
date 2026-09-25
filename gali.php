<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>


 
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to SattaPoint.com</h1>
    </div>
    <p>
        
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
	
	

	
	
	
	
</body>
</html>
	
	
	
	
	
	
	
	<html>
<head>
	<style>
		.captcha-input {
	background:#FFF url('captcha_code.php') repeat-y;
	padding-left: 85px;
}
		</style>
<title>Number open Portal</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id="main" style="background-color:aquamarine;">
<h1>Number open Portal</h1>
<div id="login">
<h2>GALI GAME</h2>
<hr/>
<form action="" method="post" >

<label>Number For Gali Game Game  :</label>
<input type="text" name="gali_number" id="gali_number" required="required" placeholder="Number for GALI Game"/><br/><br />
<label>Date :</label>
	
	
	
	
	
	 <input name="gali_date" type="text" size=10 maxlength=10  onkeyup="this.value=this.value.replace(/^(\d\d)(\d)$/g,'$1/$2').replace(/^(\d\d\/\d\d)(\d+)$/g,'$1/$2').replace(/[^\d\/]/g,'')"> <br>
	
        
	
	
	
	<td>Captcha Code: <div id="error-captcha" class="demo-error"><?php if(isset($error_message)) { echo $error_message; } ?></div><br/>
<input name="captcha_code" type="text" class="demo-input captcha-input">
</td>
<input type="submit" value=" Submit " name="submit"/><br />
</form>
</div>
<!-- Right side div -->


</div>
	<h3 style="color: red;">
<?php

	
	
	
	
	
if(isset($_POST["submit"])){
$servername = "localhost";
$username = "vk";
$password = "vk2020";
$dbname = "sattaopen";
	
	if(count($_POST)>0) {
if($_POST["captcha_code"]==$_SESSION["captcha_code"]){
$success_message = "Your message received successfully";



	

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO gali (gali_number,gali_date)
VALUES ('".$_POST["gali_number"]."','".$_POST["gali_date"]."')";

if ($conn->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}

	
	
	
	
	
	
	
	
	
	
	
	
	
$conn->close();
	
	
	}
	else{
echo("Incorrect Captcha Code");
}
	
	}
	
	
}
?>
	
	</h3>
	
	
	
	<br>
	<br>
	
	
	<h2 style="background-color:Green; color:white;"> Delete and Edit Numbers  </h2>
	<div class=" table-responsive  col-lg-12 col-md-12 col-sm-12 col-xs-12" >
     <table class="table table-dark" border="2" width="100%" style="font-size:25px; color:white;">
          <tr>
              <th>Serial Number</th>
			  <th>Gali Game</th>
              <th>Date</th>
              <th>Delete</th>
			  <th>Update</th>
              
          </tr>
          <tr>
              <?php
			  
			  
			  $servername = "localhost";
$username = "vk";
$password = "vk2020";
$dbname = "sattaopen";



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM gali ORDER BY id DESC LIMIT 0,50";
			
$result = mysqli_query($conn, $sql);

                   if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

                ?>
                 <tr>
					 <td><?php echo $row['id']; ?></td> 
            <td><?php echo $row['gali_number']; ?></td> 
             
            <td><?php echo $row['gali_date']; ?></td> 
					 <td ><a style="color:white;"href="delete_gali.php? id=<?php echo $row['id']; ?>">Delete</a></td>
					 <td><a style="color:white;" href="update_gali.php?id=<?php echo $row["id"]; ?>">Update</a></td>
					  
        </tr>
                <?php

                }
                }
			  else {
    echo "";
}
                 ?>

              </tr>
	
	
       </table>
				  
    </div>
	
		
		
		
		
		<br>
		<br>
		
		




		
	
	
	
	
	
	
	
	