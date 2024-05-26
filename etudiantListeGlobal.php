<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ETUDIANTLISTE</title>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>


        
        <div class="table-responsive-md">

        <div>
            <ul>
                <il><a role="button" class="btn btn-primary"href="etudiant.php">ETUDIANTS</a></il>
                <il><a role="button" href="L1.php" class="btn btn-success" name="L1">L1</a></il>
                <il><a role="button" href="L2.php" class="btn btn-success" name="L2">L2</a></il>
                <il><a role="button" href="L3.php" class="btn btn-success"name="L3">L3</a></il>
                <il><a role="button" href="M1.php" class="btn btn-success"name="M1">M1</a></il>
                <il><a role="button" href="M2.php" class="btn btn-success" name="M2">M2</a></il>
            </ul>
        </div><br><br>



            <h2>LA LISTE DES ETUDIANTS DANS TOUTES LES NIVEAUX</h2>
            <h4><u>1-Rechercher un etudiant</u></h4>
            
            <form  method="Get" class="form-group">
                <div class="input-group rounded">
                    <input type="search"  name="mano" class="form-control rounded" placeholder="nom ou matricule" aria-label="Search" aria-describedby="search-addon" /><br><br>
                    <span class="input-group-text border-0" id="search-addon" >
                        <input  type="submit" name="recherche" value="recherche" style="border-radius: 5px;  " class="btn-btn-primary">
                    </span>
                </div><br><br>

            </form>
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
                    include_once "connexion.php";


                    $id=$_GET['mano']??"";
                    if(isset($_GET['recherche'])){
                        $resultat = mysqli_query($con , "SELECT * FROM etudiant WHERE  matricule LIKE '% ".$id. "%'  OR nom LIKE '% ".$id. "%' " );
                    }

                    $resultat2 = mysqli_query($con , "SELECT * FROM etudiant");
                    if($id!=""){
                        $resultat2= $resultat;
                    }
                    if( mysqli_num_rows($resultat2)==0){
                        echo 'rien a affiche!';
                    }
                       
                         else {
                                while($row=mysqli_fetch_assoc($resultat2)){
                                ?>
                                    <tr class="class-primary">
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
                         }
    
                
                ?>

                </tbody>
            </table>

            <h4><u>2-La liste des etudiants</u></h4>
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
                        include_once "connexion.php";
                                
                        $req = mysqli_query($con , "SELECT * FROM etudiant");
                                
                                if(mysqli_num_rows($req) == 0){
                                echo "Il n'y a pas encore d'etudiant ajoute !" ;
                                
                                }else {
                                    while($row=mysqli_fetch_assoc($req)){
                                        ?>
                                        <tr class="class-primary">
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
                                
                                }
                        

                    ?>

                </tbody>
            </table>

        </div>

    </body>
</html>