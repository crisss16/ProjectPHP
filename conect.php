<?php
  $cnx = mysqli_connect("localhost","root","","portfolio_db");  //  user: root, fara parola!
  // Se testeaza conexiunea
  if(!$cnx){
    echo 'conexiunea nu a reusit' ;
  }
  
  // Impun setul de caractere utf8
  // mysqli_set_charset($cnx,"utf8");
?>