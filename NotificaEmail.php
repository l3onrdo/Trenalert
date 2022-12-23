<?php
$to = "Destinatario email";
$subject = "Oggetto dell'email";
$message = "Il corpo del messaggio dell'email";
$headers = "Da: trenalert@gmail.com\r\n";

mail($to, $subject, $message, $headers);
?>
