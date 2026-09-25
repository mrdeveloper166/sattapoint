<?php

session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}


			  $servername = "localhost";
$username = "vk";
$password = "vk2020";
$dbname = "sattaopen";

// Connect to server and select databse.
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// get value of id that sent from address bar
$id=$_GET['id'];

// Delete data in mysql from row that has this id
$sql="DELETE FROM ghaziabad WHERE id='$id'";
$result=mysqli_query($conn,$sql);

// if successfully deleted
if($result){
echo  " <center> <h2 style='color:green;'> Your  Number Deleted Successfully. </h2> <center>";
echo "<BR>";
echo "<a href='ghaziabad.php'>  <input style='width:100px; height:60px; background-color:Green; color:white; font-weight:bold;' type='button' Value='Click To Back' >  </a>";
}

else {
echo "ERROR";
}
?>

<?php
// close connection
$conn->close();
?>