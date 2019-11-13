<?php
require_once('costanti.php') ;

 function getNumeroCasuale ($dimensioneArray) {
    $array = [];
   $a=0;
    while ($a < $dimensioneArray) {  
      $numeroCasuale  =  rand(1,90) ;

      if (!isNumeroPresente($numeroCasuale,$array)) {
         $array[$a] = $numeroCasuale ;
          $a++ ;
      }
     
         
    
     
    }
    return $array ;
   }


 function isNumeroPresente( $numeroCorrente, $numeriPrecedenti) {
    for ($i=0; $i < count($numeriPrecedenti); $i++) {
      
       if ($numeroCorrente == $numeriPrecedenti[$i]) {
           return True;
       }
       
      }
      return false ;
   }