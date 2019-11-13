<?php
require_once('costanti.php') ;
require_once('funzioni.php') ;

 
 $citta = ["BARI","CAGLIARI","FIRENZE","GENOVA","MILANO","NAPOLI","PALERMO","ROMA","TORINO","VENEZIA","NAZIONALE"];
$estrazione = [] ;
for ($x=0; $x <= count($citta) ; $x++) { 

    $estrazione[$x] =  getNumeroCasuale(NUMERIESTRAIBILI) ;


    
}


 ?>

