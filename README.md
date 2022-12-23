

# Trenalert

Codice PHP che permette di ricevere notifiche via Telegram o e-mail di eventuali problemi sulla linea ferroviaria italiana.

# Istruzioni

Ecco come utilizzare Trenalert:

## Server hosting

Per utilizzare Trenalert, è necessario disporre di un server hosting dove salvare ed eventualmente eseguire i cron job. Ad esempio, puoi utilizzare [Altervista](https://it.altervista.org).

## Cron job

Se il tuo server hosting non permette di eseguire i cron job, puoi utilizzare [cron-job.org](cron-job.org), che offre questo servizio in modo gratuito, a condizione che i cron job non durino più di 30 secondi. Per utilizzare cron-job.org, basta seguire le istruzioni del sito, inserire il link della tua pagina e selezionare gli orari e i giorni in cui i cron job devono essere eseguiti.

## Notifiche email

Per utilizzare le notifiche email, basta semplicemente inserire la propria email nell'apposito campo del codice e inserirlo nel file chiamato "notifiche" nel punto indicato.

## Notifiche Telegram

Per utilizzare le notifiche Telegram:

Crea il tuo bot utilizzando botfather, e ottieni il token del bot da inserire nell'apposita variabile.
Per ottenere il chat ID, avvia il bot @myidbot e invia il comando "/getid" e inserisci il chat ID nell'apposita variabile.
## Inserire il metodo di notifica

Una volta scelto il modo in cui ricevere le notifiche (anche entrambe volento), basta copiare il codice (esclusi i tag <?php e ?>) dai relativi file all'interno del file "notifiche.php" nel punto indicato dai commenti.

## Configurazione finale del file notifiche.php

Come ultimo passaggio, inserisci le stazioni all'interno dell'array. Una volta completato, Trenalert è pronto all'utilizzo.


------
DISCLAIMER:
Il presente codice è stato realizzato a scopo didattico e informativo. I contenuti pubblicati sono forniti "così come sono" e senza alcuna garanzia, implicita o esplicita, di accuratezza, completezza o idoneità a uno scopo specifico. Il proprietario del codice non è responsabile per eventuali danni o perdite che possono derivare dall'utilizzo delle informazioni ottenibili dal codice.

DECLINO DI OGNI RESPONSABILITÀ:
Il proprietario del presente codice declina ogni responsabilità per eventuali errori, omissioni o perdite che possono derivare dall'utilizzo delle informazioni ottenibili dal codice.


