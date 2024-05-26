<?php
  include_once "connexion.php";
  $id= $_GET['matricule'];
  $req = mysqli_query($con , "DELETE FROM soutenir WHERE matricule = '$id'");
  if($req){
    header('location: soutenanceListe.php');
  }else{
    echo 'suppression annule';
  }
?>