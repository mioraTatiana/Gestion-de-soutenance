<?php
  include_once "connexion.php";
  $id= $_GET['idprof'];
  $req = mysqli_query($con , "DELETE FROM professeur WHERE idprof = '$id'");
  if($req){
    header('location:professeurLite.php');
  }
?>