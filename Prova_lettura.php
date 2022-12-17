<html>
<head>
  <title>Web Scraping</title>
</head>
<body>
  <h1>Contenuto dei paragrafi</h1>
  <div id="results">
  <?php

// Set the URL of the webpage you want to scrape
$url = "https://www.trenitalia.com/it/informazioni/Infomobilita/notizie-infomobilita.html";

// Use the file_get_contents function to retrieve the webpage's HTML code
$html = file_get_contents($url);

// Use a regular expression to search for the <a> element
preg_match_all("/<a[^>]*href=\".*\"[^>]*class=\"headingNewsAccordion inEvidenza\"[^>]*>(.*?)<\/a>/", $html, $matches);

// Loop through the matches and print the text content of each element
foreach ($matches[1] as $match) {
  echo $match ;
  if(strpos($match,"Toscana")==true){
  $filename = "nome-del-file.txt";
$string = "oggi non si torna a casa";

file_put_contents($filename, $string);

  }
  echo "<br>";
}
$filename = "nome-del-file.txt";

$file = fopen($filename, "r");

while (!feof($file)) {
    $line = fgets($file);
    echo $line . "<br>";
}

fclose($file);


  ?>
  </div>
</body>
</html>
