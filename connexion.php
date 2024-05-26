<?php
  //connexion à la base de données gestion soutenance
  
  $con = mysqli_connect("localhost","root","","gestion_soutenance");
  if(!$con){
     echo "Vous n'êtes pas connecté à la base de donnée";
  }
?>