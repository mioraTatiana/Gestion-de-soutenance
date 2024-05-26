<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ETUDIANT-L3</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

        <style>
            body{
                display: flex;
                align-items: center;
                justify-content: center;
                min-height: 100vh;
                position: relative;
            }
            
            img {
                height: 25px;
   
            }

        </style>
    </head>


    <body>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/otstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>


        
        <div class="table-responsive-md">
            <div>
                    <ul>
                        <il><a role="button" class="btn btn-primary"href="etudiant.php">ETUDIANTS</a></il>
                        <il><a role="button" href="L1.php" class="btn btn-primary" name="L1">L1</a></il>
                        <il><a role="button" href="L2.php" class="btn btn-primary"name="L2">L2</a></il>
                        <il><a role="button" href="M1.php" class="btn btn-primary"name="M1">M1</a></il>
                        <il><a role="button" href="M2.php" class="btn btn-primary" name="M2">M2</a></il>
                        <il><a role="button" class="btn btn-primary"   href="etudiantListeGlobal.php">LISTER LES ETUDIANTS</a></il>

                    </ul>
            </div><br><br>


            <h2>LA LISTE DES ETUDIANTS EN L3</h2>



            <table class="table table-bordered">

                <thead>
                    <tr class="bg-primary">
                        <th>Matricule</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>E-mail</th>
                        <th>Niveau</th>
                        <th>Parcours</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>
    
    
                <tbody >

                    <?php
                        include_once 'connexion.php';
                        
                        $req=mysqli_query($con, "SELECT * FROM `etudiant` WHERE niveau='L3';");

                        $id=0;
                        while($row=mysqli_fetch_assoc($req)){
                            $id=$id+1
                            ?>
                                            
                                <tr class ="class-primary">
                                    <td><?=$row['matricule']?></td>
                                    <td><?=$row['nom']?></td>
                                    <td><?=$row['prenom']?></td>
                                    <td><?=$row['email']?></td>
                                    <td><?=$row['niveau']?></td>
                                    <td><?=$row['parcours']?></td>
                                    <td><a href="etudiantModifier.php?matricule=<?=$row['matricule'];?>" role="button"><img src="pen.png"></a></td>
                                    <td><a href="supprimerEtudiant.php?matricule=<?=$row['matricule'];?>" role="button"><img src="trash.png"></a></td>
                                                        
                                    
                                                    
                                </tr>

                            <?php
                                           
                        }                      
                                        
                        echo 'Effectif total=' .$id  ;
                            
                    ?>

                    
                </tbody>
            </table>
        </div>

    </body>

</html>