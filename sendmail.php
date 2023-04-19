<?php
$studentemail = htmlspecialchars($_POST['studentemail']);
$naam = htmlspecialchars($_POST['Naam']);
$subject = htmlspecialchars($_POST['Onderwerp']);
$bericht = htmlspecialchars($_POST['Bericht']);
$message= "U heeft deze email ontvangen van " . $naam . " met het onderwerp " . $subject . " en het bericht " . $bericht . " .";
$naam= htmlspecialchars($_POST['Naam']);
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';
$headers[] = 'From: Services  <arne@pelkmansarne.com>';
// using mail function and returns boolean
$send = mail($studentemail, $subject, $message , implode("\r\n", $headers));
if ($send) {
$response = "Mail sent successfully";
} else {
$response = "Mail not sent";
}
echo json_encode($response);
?>