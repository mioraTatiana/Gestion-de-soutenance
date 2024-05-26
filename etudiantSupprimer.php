<?php
 include_once 'connexion.php';
 $mat=$_GET['matricule'];

 $req=mysqli_query($con,"DELETE FROM etudiant WHERE matricule='$mat'");
 echo 'je taime babe';
?>