<?php
    $api_key = "5860264964:AAGI3l31kWylDKr2Xi533ai0AYUOVEOcqnI"; // Token del tuo bot

    $chat_id = "695635146";//id della chat

    // Invia un messaggio di testo alla chat
    $text = "Problemi sulla linea ecco le informazioni: \n\n".$string."\n\nPer ottenere alte informazioni contralli sul sito:\nhttps://www.trenitalia.com/it/informazioni/Infomobilita/notizie-infomobilita.html"; // Testo del messaggio

    $send_message = "https://api.telegram.org/bot" . $api_key . "/sendMessage?chat_id=" . $chat_id . "&text=" . urlencode($text);

    $response = file_get_contents($send_message);
?>