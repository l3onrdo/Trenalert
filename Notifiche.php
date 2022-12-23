<?php
    //Imposta l'URL della pagina web che vuoi estrarre i dati"
    $url = "https://www.trenitalia.com/it/informazioni/Infomobilita/notizie-infomobilita.html";

    //Usa la funzione file_get_contents per recuperare il codice HTML della pagina web
    $html = file_get_contents($url);

    //Usa un espressione reolare per trovare le informazioni dal sito infomobilità
    preg_match_all("/<a[^>]*href=\".*\"[^>]*class=\"headingNewsAccordion inEvidenza\"[^>]*>(.*?)<\/a>/", $html, $matches);

    //Crea una stringa che contenente tutti gli elemnti di $matches[1]
    $string=implode("\n\n",$matches[1]);
	
    //inserisci il nome delle stazioni o delle linee da controllare
    //per le stazioni basta il nome
    //per la linea esempio "firenze-roma
    //NON VENGONO FATTI CONTROLLI SURLLA CORETTEZA DEI NOMI INSERIRE, QUALORA SIANO ERRATI IL CODICE PORTEBBE NON FUNZIONARE
    //Esempio
    $array = array('Firenze - Roma', 'Roma termini','Chivasso - Pinerolo');

    //Controllo la presenza delle stazioni o linee inserite nell'array
    foreach ($array as $word) {
    
        if (preg_match("/\s*$word\s*/i", $string)!==false) {
        
	
		/*inreire in questo punto il modo in cui si voglio ricvere le notifiche
		basta copiare uno dei due file qui dentro
		...
		....
		.
		.....
		...
		....
		...*/
            
            break;
            
        }
    }
?>
