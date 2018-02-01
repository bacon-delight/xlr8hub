<?php
$temp = mt_rand(1000,10000) ;
$to      = 'dipanjan131@gmail.com';
$subject = 'PulseFlare Account Verification';
$message = "Thank you for signing up with us. Please paste the following verification code to complete the signup process.
$temp" ;

$headers = 'From: auto_verification@pulseflare.com' . "\r\n" . 'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

print phpinfo();
?>