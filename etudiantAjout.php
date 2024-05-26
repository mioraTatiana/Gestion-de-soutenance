<?php
    include_once 'connexion.php';
    $matricule=$_GET['matricule'];
    $nom=$_GET['nom'];
    $prenom=$_GET['prenom'];
    $email=$_GET['email'];
    $niveau=$_GET['niveau'];
    $parcours=$_GET['parcours'];

    $req = mysqli_query($con ,"INSERT INTO etudiant (matricule, nom, prenom, email, niveau, parcours) VALUES('$matricule', '$nom','$prenom','$email', '$niveau','$parcours');");
      
    $req1 = mysqli_affected_rows($con);
    
    if($req1){
        echo'etudiant bien ajoute';
        header("location: etudiantListeGlobal.php");
    }else{
        echo'etudiant pas encore ajoute';
    }

    // if(isset($_POST['ajouter-bouton'])){

    //     $matricule=$_POST['matricule'];
    //     $nom=$_POST['nom'];
    //     $prenom=$_POST['prenom'];
    //     $email=$_POST['email'];
    //     $niveau=$_POST['niveau'];
    //     $parcours=$_POST['parcours'];

    //     $req = mysqli_query($con ,"INSERT INTO etudiant (matricule, nom, prenom, email, niveau, parcours) VALUES(' $matricule', '$nom','$prenom','$email', '$niveau','$parcours');");

    //     if($req){
    //         echo'etudiant bien ajoute';
    //         header("location: etudiantListeGlobal.php");
    //     }else{
    //         echo'etudiant pas encore ajoute';
    //     }

    // }

?>