<?php

// check for form submission - if it doesn't exist then send back to contact form
if (!isset($_POST['save']) || $_POST['save'] != 'contact') 
{
    echo "<script type='text/javascript'>alert('Message Failed. Please try again', 'error'); location.href='index.html#contact';</script>";
}
else
{
	echo "<script type='text/javascript'>alert('Gracias por contactarnos! Su mensaje ha sido enviado y nos pondremos en contacto lo mas rapido posible'); location.href='index.html#contact';</script>";
}
   
// get the posted data
$name = $_POST['name'];
$email_address = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
   
$headers = "From: $email_address\r\n"; 
$headers .= "Reply-To: $email_address\r\n";

// write the email content
$email_content = "Nombre y Apellido: $name\n";
$email_content .= "Email: $email_address\n";
$email_content .= "Asunto: $subject\n";
$email_content .= "Mensaje:\n\n$message";
   
// send the email
//ENTER YOUR INFORMATION BELOW FOR THE FORM TO WORK!
mail ('info@geekguin.com.ve', 'geekguin.com.ve - Contact Form', $email_content, $headers);
   
// send the user back to the form
// header('Location: gracias.html?s='.urlencode('Gracias por enviar tu mensaje.')); exit;
/*header('Location: index.html?s='.urlencode('Gracias por enviar tu mensaje.')); exit;*/

?>