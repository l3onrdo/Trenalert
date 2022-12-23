<?php
$to = "leomiralli@gmal.com";
$subject = "Oggetto dell'email";
$message = "Il corpo del messaggio dell'email";
$headers = "Da: trenalert@gmail.com\r\n";

if (mail($to, $subject, $message, $headers)) {
  echo "L'email è stata inviata con successo!";
} else {
  echo "C'è stato un errore nell'invio dell'email.";
}
?>
