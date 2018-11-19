<?php
// Check for empty fields
if(empty($_GET['name'])  		||
  empty($_GET['email']) 		||
  empty($_GET['msg'])	||
  !filter_var($_GET['email'],FILTER_VALIDATE_EMAIL)) {
  echo "No arguments Provided!";
	return false;
}

$name = strip_tags(htmlspecialchars($_GET['name']));
$email_address = strip_tags(htmlspecialchars($_GET['email']));
$message = strip_tags(htmlspecialchars(urldecode($_GET['msg'])));

$ip = $_SERVER['REMOTE_ADDR'];
$ua = $_SERVER['HTTP_USER_AGENT'];
$to = 'info@mcsleepy.de';
$email_subject = "Kontaktformular mcsleepy.de:  $name";
$email_body = "Name: $name\n\nEmail: $email_address\n\nNachricht:\n$message\n\n\nUser-Agent: $ua\nIP: $ip\n";
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/plain; charset=utf-8\r\n";
$headers .= "From: Kontaktformular@mcsleepy.de\n";
$headers .= "Reply-To: $email_address";
@mail($to,$email_subject,$email_body,$headers);
print("Versendet");
return true;
?>
