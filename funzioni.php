<?php
require_once('costanti.php') ;

 function getNumeroCasuale ($dimensioneArray) {
    $array = [];
    for ($i=0; $i < $dimensioneArray ; $i++) { 
      $numeroCasuale  =  rand(0,90) ;
      if (isNumeroPresente($numeroCasuale,$array)) {
          $array[$i] = $numeroCasuale ;
      }else { 
        $i-- ; 
      }
    }

 }


 function isNumeroPresente( $numeroCorrente, $numeriPrecedenti) {
    for ($i=0; $i < count($numeriPrecedenti); $i++) {
      
       if ($numeroCorrente == $numeriPrecedenti[$i]) {
           return True;
       }