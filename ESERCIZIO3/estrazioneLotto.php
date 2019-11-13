<?php
require_once('costanti.php') ;
require_once('funzioni.php') ; 
require('database.php') ;
?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>estrazione del lotto</title>
  </head>
  <body>
  <div class="container">
  <div class="row justify-content-start">
       
        
  <div class="col-10">
    
  <!-- inizio tabella-->
    <table class="table">
    <thead class="thead-dark">
      <tr>
    
        <!-- <th scope="col">ESTRAZIONE DEL LOTTO</th> -->
       
      </tr>
    </thead>
    <tbody>
        <?php for ($i=0; $i < count($citta) ; $i++) { ?>
               
      <tr>

        <th scope="row"><?=$citta[$i]?></th>
        <?php for ($index=0; $index < NUMERIESTRAIBILI ; $index++) { ?>


            <td> <?=$estrazione[$i][$index]?> </td> 


       <?php } ?>
        
      

      </tr>


<?php } ?>


    </tbody>
  </table>
</div> <!--chiusura col-10-->

</div> <!--chiusura riga-->








  </div> <!--chiusura container-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>