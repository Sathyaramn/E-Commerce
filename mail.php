<?php
$first_name ="sathya";
$last_name = "ram n";
$city_name ="kulasekharam";
$email = "sathyaram456@gmail.com";

/* sql query for inserting data into database */
/* creates object */
$mail = new PHPMailer(true);
$mailid = $email;
$subject = "Thank u";
$text_message = "Hello";
$message = "Thank You for Contact with us.";

try
{
$mail->IsSMTP();
$mail->isHTML(true);
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";
$mail->Port = '465';
$mail->AddAddress($mailid);
$mail->Username ="localdeceloper111@gmail.com";
$mail->Password ="LocalDeveloper111";
$mail->SetFrom('localdeceloper111@gmail.com','Divyasundar Sahu');
$mail->AddReplyTo("localdeceloper111@gmail.com","Divyasundar Sahu");
$mail->Subject = $subject;
$mail->Body = $message;
$mail->AltBody = $message;
if($mail->Send())
{
echo "Thank you for register u got a notification through the mail you provide";
}
}
catch(phpmailerException $ex)
{
$msg = "
".$ex->errorMessage()."
";
}
?>
