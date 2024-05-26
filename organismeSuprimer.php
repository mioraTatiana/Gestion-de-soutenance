<?php
  include_once "connexion.php";
  $id= $_GET['idorg'];
  $req = mysqli_query($con , "DELETE FROM organisme WHERE idorg = '$id'");
  if($req){
    header('location:organismeListe.php');
  }else{
    echo 'suppression annule';
  }
?>