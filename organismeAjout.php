<?php
    include_once 'connexion.php';

    if(isset($_POST['ajouter-bouton'])){

        $idorg=$_POST['idorg'];
        $design=$_POST['design'];
        $lieu=$_POST['lieu'];

        $req=mysqli_query($con, "INSERT INTO organisme (idorg, design, lieu) VALUES('$idorg','$design', '$lieu');");

        if($req){
        header("location: organismeListe.php");
    
        }else{
        echo 'organisme non enregistre';
        }
    }
?>