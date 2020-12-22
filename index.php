<?php
// <!-- Creare una variabile con un paragrafo di testo.
// Recuperare dalla query string un parametro badword che contiene una parola definita dall'utente
// Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre *. -->

$badword = $_GET["badword"];

$text = "Oggi non è stata una bella giornata, ho sbattutto il mignolo su uno spigolo ed ho esclamato: cavolo!!";

$text = str_replace($badword, "***", $text);






?>


<p> <?php echo ($text)  ?> </p>
<p> <?php echo ("Il testo è lungo " . strlen($text) . " caratteri")  ?> </p>