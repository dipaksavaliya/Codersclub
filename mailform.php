<?php
ini_set('zilib.output_compression','off');
$to = "pritesh@pulpstech.com";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$from = "pritesh@pulpstech.com";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo "Mail Sent.";
?> 