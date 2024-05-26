<?php
  include_once "connexion.php";
  $id= $_GET['matricule'];
  $req = mysqli_query($con , "DELETE FROM etudiant WHERE matricule = '$id'");
  if($req){
    header('location: etudiantListeGlobal.php');
  }else{
    echo 'suppression annule';
  }
?>