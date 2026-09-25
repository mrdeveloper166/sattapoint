<?PHP
   
$to = "computerbright2014@gmail.com";
$subject = "Response from website";
$message = "This is test message";
$headers = "From: admin@kkm.org.in";

if(mail($to, $subject, $message, $headers)){
    Echo "Mail Send Successfully";
}else{

    echo "can not sentd mail";
}

?>


