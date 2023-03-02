<?php
    // Imposta l'URL della pagina web da cui si vuole estrarre i dati
    $url = "https://www.trenitalia.com/it/informazioni/Infomobilita/notizie-infomobilita.html";

    // Crea un nuovo documento DOM e carica il codice HTML dalla pagina web
    $doc = new DOMDocument();
    $doc->loadHTMLFile($url);

    // Seleziona tutti gli elementi <a> con la classe "headingNewsAccordion inEvidenza"
    // Seleziona tutti gli elementi <a> con la classe "headingNewsAccordion inEvidenza"
    $xpath = new DOMXPath($doc);
    $elements = $xpath->query('//a[@class="headingNewsAccordion inEvidenza"]');

    // Stampa il testo di tutti i link trovati
    foreach ($elements as $element) {
        $string=$element->nodeValue . "\n";
    }

    // Inserisci il nome delle stazioni o delle linee da controllare
    // Per le stazioni basta il nome
    // Per la linea esempio "firenze-roma"
    // NON VENGONO FATTI CONTROLLI SULLA CORRETTEZZA DEI NOMI INSERITI, QUALORA SIANO ERRATI IL CODICE POTREBBE NON FUNZIONARE
    //esempio
    $array = array('euronight','firenze - roma','roma termini','roma tibutina');
    // Controllo la presenza delle stazioni o linee inserite nell'array
    foreach ($array as $word) {
    	$string=strtolower($string);
        //inserisci codeice per ricevere le norifiche
    }
?>
