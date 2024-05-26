<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Modifier-professseur</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

        <style>
            body{
                display: flex;
                align-items: center;
                justify-content: center;
                min-height: 100vh;
                position: relative;
                padding: 30px;

            }

            form{
                background-color: #f6f8f8;
                padding: 25px;
                box-shadow: 0 0 10px rgba(0,0,0,0.2);
                border-radius: 6px;

            
            }
    
            form form {
                display: flex;
                flex-direction: column;
            }


    
        </style>

        <?php
           
           include_once 'connexion.php';
           $id=$_GET['idprof'];
           $result=mysqli_query($con, "SELECT * FROM professeur where idprof= '$id';");
           $row=mysqli_fetch_assoc($result);
           $idprof =$row['idprof'];
           $nom=$row['nom'];
           $prenom=$row['prenom'];
           $civilite=$row['civilite'];
           $grade=$row['grade'];

           if(isset($_POST['modifier-bouton'])){

                $idprof=$_POST['idprof'];
                $nom=$_POST['nom'];
                $prenom=$_POST['prenom'];
                $civilite=$_POST['civilite'];
                $grade=$_POST['grade'];
                
                if(isset($idprof) && isset($nom) && isset( $prenom) && isset($civilite) && isset($grade) ){

                    $req=mysqli_query($con, "UPDATE professeur SET idprof='$idprof', nom='$nom', prenom='$prenom', civilite='$civilite', grade='$grade' WHERE idprof='$idprof'; ");

                    if ($req) {
                        header('location: professeurLite.php');
                    }else{
                        echo 'professeur non modifie';
                        
                    }
                    
                } 
            }


        ?>

    </head>
    
    <body>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

                
        
        <div id="divProfesseur">

                        
            <ul>

                <il id="lienEtudiant"> <a href="etudiant.php"role="button"  class=" btn btn-primary" >ETUDIANT</a></il>
                <il id="lienOrganisation"><a href="organisme.php"role="button"  class=" btn btn-primary" >ORGANISME</a></il>
                <il id="lienSoutenance"><a href="soutenance.php"role="button"  class=" btn btn-primary"  >SOUTENANCE</a></il>
                <il><a  role="button"  class=" btn btn-primary" href="professeur.php">LES PROFESSEURS</a><br><br></il>

            </ul>



            <form method="post" name="professeur" action="">

                <h2>Modifier les informations à propos<br> du professeur</h2>

                <div class="form-group">

                    <label for="idprof">Identifiant du professeur:</label><br>
                    <input type="text" name="idprof" id="idprof" class="form-control" value="<?php echo $idprof;?>"><br>
                    
                    <label for="Nom">Nom:</label><br>
                    <input type="text"name="nom" id="nom" class="form-control" value=<?php echo $nom;?>><br>
                    
                    <label for="prenom">Prénom:</label><br>
                    <input type="text"name="prenom" id="prenom" class="form-control" value=<?php echo $prenom;?>><br>

                </div>
                
                <div>

                    <label for="civilite">civilité:</label><br>
                    <select name="civilite" id="civilite" class="form-control" value=<?php echo $civilite;?>>
                        <option value="Mr">Mr</option>
                        <option value="Mlle">Mlle</option>
                        <option value="Mme">Mme</option>
                    </select><br>

                    <label for="grade-select">grade:</label><br>
                    <select name="grade" id="grade-select" class="form-control" value=<?php echo $grade;?>>
                        <option value="Professeur-titulaire">Professeur titulaire</option>
                        <option value="Maitre-de-Conferences">Maître de Conférences</option>
                        <option value="Assistant">Assistant d'Enseignement Supérieur et de Recherche</option>
                        <option value="Docteur-HDR">Docteur HDR</option>
                        <option value="Docteur-en-informatique">Docteur en informatique</option>
                        <option value="Doctorat-en-informatique">Doctorat en informatique</option>
                    </select><br><br>

                    <div>
                        
                        <input type="submit" value="Modifier" class="btn btn-primary col-md-12" name="modifier-bouton"><br><br>

                    

                    </div>

                </div>
            </form>
        </div>

    </body>
</html>