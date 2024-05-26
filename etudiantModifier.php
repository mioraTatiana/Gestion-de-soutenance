<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Modifier-les-etudiants</title>
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
            $id=$_GET['matricule'];
            $result = mysqli_query($con , "SELECT * FROM etudiant WHERE matricule = '$id'");
            $row=mysqli_fetch_assoc($result);
            $matricule=$_GET['matricule'];
                $nom=$_GET['nom'];
                $prenom=$_GET['prenom'];
                $email=$_GET['email'];
                $niveau=$_GET['niveau'];
                $parcours=$_GET['parcours'];
                $req=mysqli_query($con, "UPDATE etudiant SET matricule='$matricule', nom='$nom', prenom='$prenom', email='$email', niveau='$niveau', parcours='$parcours' WHERE matricule='$matricule'; ");
                


            if(isset($_GET['modifier-bouton'])){

                $matricule=$_GET['matricule'];
                $nom=$_GET['nom'];
                $prenom=$_GET['prenom'];
                $email=$_GET['email'];
                $niveau=$_GET['niveau'];
                $parcours=$_GET['parcours'];

                extract($_GET);
                
                if(isset($matricule) && isset($nom) && isset( $prenom)&& isset($email) && isset($niveau) && isset($parcours) ){

                    $req=mysqli_query($con, "UPDATE etudiant SET matricule='$matricule', nom='$nom', prenom='$prenom', email='$email', niveau='$niveau', parcours='$parcours' WHERE matricule='$matricule'; ");

                    if ($req) {
                        header('location: etudiantListeGlobal.php');
                    }else{
                        echo 'etudiant non modifie';
                        
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

        <div id="divEtudiant" class="row" class="container" >

                <ul>

                    <il  id="lienProfesseur" ><a  role="button" class="btn btn-primary"role="button" href="professeur.php">PROFESSEUR</a> </il>
                    <il  id="lienOrganisation"><a  role="button" class="btn btn-primary" href="organisme.php">ORGANISME</a> </il>
                    <il id="lienSoutenance" ><a role="button" class="btn btn-primary" href=soutenance.php>SOUTENANCE</a> </il>
                    <il><a  role="button" class="btn btn-primary"  href="etudiantListeNiveau.php">LISTER PAR NIVEAU</a></il>
                    <il><a role="button" class="btn btn-primary"   href="etudiantListeGlobal.php">LISTER LES ETUDIANTS</a></il>
                    <il><a  role="button" class="btn btn-primary"  href="etudiant.php">ETUDIANT</a></il>


                    
                </ul>
            

                <br><br><br>


                <form method="GET" name="etudiant-inscription" >

                    <h3>Modifier l'information sur un etudiant</h3>

                    <div class="form-group">

                        <label for="matricule">Matricule:</label><br>
                        <input type="text" name="matricule" id="matricule" class="form-control" value="<?=$row['matricule'];?>"><br>

                        <label for="Nom">Nom:</label><br>
                        <input type="text"name="nom" id="nom" class="form-control"  value="<?=$row['nom'];?>"><br>

                        <label for="prenom">Prénom:</label><br>
                        <input type="text"name="prenom" id="prenom" class="form-control"  value="<?=$row['prenom'];?>"><br>

                    </div>

                    <div>

                        <label for=" email">e-mail:</label><br>
                        <input type="email" name="email" id="e-mail" class="form-control" value="<?=$row['email'];?>"><br>

                    </div>

                    <div>

                        <label for="niveau-select">Niveau:</label><br>
                        <select name="niveau" id="niveau-select"  class="form-control" value=<?=$row['niveau'];?> >
                            <option value="L1">L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="M1">M1</option>
                            <option value="M2">M2</option>
                        </select><br>

                        <label for="parcours-select">Parcours:</label><br>
                        <select name="parcours" id="parcours-select" class="form-control" value=<?=$row['parcours'];?>>
                            <option value="GB">GB</option>
                            <option value="SR">SR</option>
                            <option value="IG">IG</option>
                        </select><br><br>

                    </div>

                    <div class="container " style="display: inline-flexbox;" id="bouton1">
                        <input type="submit" value="Modifier" class="btn btn-primary col-md-12" name="modifier-bouton">

                    </div>

                </form>
        </div>

    </body>
<html>