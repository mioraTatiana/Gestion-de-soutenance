<?php

    include_once 'connexion.php';

    if(isset($_POST['ajouter-bouton'])){

        $idprof=$_POST['idprof'];
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $civilite=$_POST['civilite'];
        $grade=$_POST['grade'];

        $req=mysqli_query($con,  "INSERT INTO professeur (idprof, nom, prenom, civilite, grade) VALUES ('$idprof', '$nom', '$prenom', '$civilite','$grade');");

        if($req){
            header('location: professeurLite.php');
        }else{
            echo'professeur non ajoute';
        }
    }
?>