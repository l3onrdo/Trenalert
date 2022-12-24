<?php
$to = "Destinatario email";
$subject = "Oggetto dell'email";
$message = $text = "Problemi sulla linea ecco le informazioni: \n\n".$string."\n\nPer ottenere alte informazioni contralli sul sito:\nhttps://www.trenitalia.com/it/informazioni/Infomobilita/notizie-infomobilita.html";
$headers = "Da: trenalert@gmail.com\r\n";

mail($to, $subject, $message, $headers);
?>
