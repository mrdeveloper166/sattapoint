<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <meta charset="UTF-8">
    <title>Welcome To Gali Satta</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
<link rel="stylesheet" type="text/css" href="style.css">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129405892-4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-129405892-4');
</script>

<style>
    
    a{
        
        color:white;
    }
</style>

</head>
<body>
    
	

	
	
	


	
	
	
	
	
	
	


<body>

<div id="main" style="background-color:aquamarine;">
<h1>Gali Satta Chart</h1>


<nav style="text-align:center; background-color:red; font-size:16px; color:white;" >
<a href="http://sattapoint.com/">Home</a> |
<a href="desawar-chart.php">Desawar Chart</a> |
<a href="gali-satta-chart">Gali Chart</a> |
<a href="ghaziabad-satta-chart">Ghaziabad Chart</a>|
<a href="faridabad-satta-chart">Faridabad Chart</a>|
<a href="contact.php">Contact us</a>
</nav>

<hr/>
<form action="" method="post" >

	
	
	
	
	
	
        
	
	
	
	
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
	
	
	<h2 style="background-color:Green; color:white;"> Gali Satta Game 2020 Chart  </h2>
	<div class=" table-responsive  col-lg-12 col-md-12 col-sm-12 col-xs-12" >
     <table class="table table-dark" border="2" width="100%" style="font-size:25px; color:white;">
          <tr>
              <th>Serial Number</th>
			  <th>Gali Game</th>
              <th>Date</th>
              
              
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

$sql = "SELECT * FROM gali ORDER BY id ASC";
			
$result = mysqli_query($conn, $sql);

                   if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

                ?>
                 <tr>
					 <td><?php echo $row['id']; ?></td> 
            <td><?php echo $row['gali_number']; ?></td> 
             
            <td><?php echo $row['gali_date']; ?></td> 
					 
					  
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
		
	</body>
	
	</html>