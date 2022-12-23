<?php
    $api_key = "IL TUO TOKEN"; // Token del tuo bot

    $chat_id = "IL TUO ID";//id della chat

    // Invia un messaggio di testo alla chat
    $text = "Problemi sulla linea ecco le informazioni: \n\n".$string."\n\nPer ottenere alte informazioni contralli sul sito:\nhttps://www.trenitalia.com/it/informazioni/Infomobilita/notizie-infomobilita.html"; // Testo del messaggio

    $send_message = "https://api.telegram.org/bot" . $api_key . "/sendMessage?chat_id=" . $chat_id . "&text=" . urlencode($text);

    $response = file_get_contents($send_message);
?>
