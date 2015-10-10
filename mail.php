<?php 

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$emailBody =   "Name: ".$name."\nEmail: ".$email."\nPhone: ".$phone."\n\nMessage: \n\n".$message."\n";  

$headers = 'From: support@ctrlthreads.co.in' . "\r\n" .
    'Reply-To: ' support@ctrlthreads.co.in. "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail('support@ctrlthreads.co.in', 'Contact - Us Request', $emailBody, $headers); 

header('Location: http://www.ctrlthreads.co.in/');
?>
