<!DOCTYPE html>

<html>

    <head>

        <title>SOUTENANCE</title>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <link rel="stylesheet" href="soutenance.css">
        <?php
            include_once 'connexion.php';
        ?>

    </head>

    <body>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

        

        <div id="divSoutenance">

            <ul>

                <il id="lienEtudiant"><a role="button" class="btn btn-primary"  href="etudiant.php">ETUDIANT</a></il>
                <il id="lienProfesseur"> <a role="button" class="btn btn-primary"  href="professeur.php">PROFESSEUR</a></il>
                <il id="lienOrganisation"> <a role="button" class="btn btn-primary"  href="organisme.php">ORGANISME</a></il>
                <il><a  role="button" class="btn btn-success"  href="soutenanceListe.php">LISTE EN RAPPORT AVEC LE SOUTENANCE</a></il><br><br>
                <il><a  role="button"   class="btn btn-success " href="note.php">Note entre deux dates</a></il>
                <il><a  role="button"   class="btn btn-success " href="passoutenus.php">pas soutenus</a></il>
                <il><a  role="button"   class="btn btn-success " href="inter.php">Generer un pdf du proces verbal</a></il>

                    
            </ul>

            <form method="post" name="soutenance" action="soutenanceAjout.php">

                <h2><u>Les informations d'une soutenance<u></h2>


                <div class="form-group">

                    <label for="matricule">Matricule:</label><br>
                    <select name="matricule" id="matricule" class="form-control" ><br>

                        <?php
                            include_once 'connexion.php';
                            $req1=mysqli_query($con, "SELECT * FROM etudiant ");
                            while($row=mysqli_fetch_assoc($req1)){
                                $matricule=$row['matricule']
                                ?>
                                <option value="<?=$matricule?>"><?=$matricule?></option>
                                <?php
                            }

                        ?>    
                    </select>

                    <label for="idorg">Identifiant d' organisation:</label><br>
                    <select name="idorg" id="idorg" class="form-control"><br>
                        <?php
                            include_once 'connexion.php';
                            $req2=mysqli_query($con, "SELECT * FROM organisme ");
                            while($row=mysqli_fetch_assoc($req2)){
                                $idorg=$row['idorg']
                                ?>
                                <option value="<?=$idorg?>"><?=$idorg?></option>
                                <?php
                            }

                        ?>    

                    </select>
                    
                    <label for="annee_univ">Année_universitaire:</label><br>
                    <input type="text"name="anneeUniv" id="annee_univ" class="form-control" placeholder="aaaa-aaaa" required pattern="\d{4}-\d{4}"><br>
                    
                    <label for="note">note:</label><br>
                    <input type="number"name="note" id="note" class="form-control" min="0" max="20"><br>
                    
                    <label for="president">Président:</label><br>
                    <select name="president" id="president" class="form-control"><br>
                        <?php
                            include_once 'connexion_php';
                            $req2=mysqli_query($con, "SELECT * FROM professeur ");
                            while($tab=mysqli_fetch_assoc($req2)) {
                                $civ=$tab['civilite'];
                                $nom=$tab['nom'];
                                $prenom=$tab['prenom'];
                                $grade=$tab['grade'];

                                ?>
                             <option value="<?=$civ?> <?=$nom?> <?=$prenom?> <?=$grade?>"> <?=$civ?> <?=$nom?> <?=$prenom?> <?=$grade?> </option>
                               <?php
                           }
                        ?>
                    </select>
                    
                    <label for="examinateur">Examinateur:</label><br>
                    <select name="examinateur" id="examinateur" class="form-control">
                        <?php
                            
                            include_once 'connexion_php';
                            $req2=mysqli_query($con, "SELECT * FROM professeur ");
                            while($tab=mysqli_fetch_assoc($req2)) {
                                $civ=$tab['civilite'];
                                $nom=$tab['nom'];
                                $prenom=$tab['prenom'];
                                $grade=$tab['grade'];

                                ?>
                             <option value="<?=$civ?> <?=$nom?> <?=$prenom?> <?=$grade?>"> <?=$civ?> <?=$nom?> <?=$prenom?> <?=$grade?> </option>
                               <?php
                           }
                        ?>
                    </select>

                    <label for="rapporteur_int">Rapporteur_int:</label><br>
                    <select  name="rapporteurInt" id="rapporteur_int" class="form-control"><br>
                        
                        <?php
                            
                            include_once 'connexion_php';
                            $req3=mysqli_query($con, "SELECT * FROM professeur ");
                            while($tab=mysqli_fetch_assoc($req3)) {
                                $civ=$tab['civilite'];
                                $nom=$tab['nom'];
                                $prenom=$tab['prenom'];
                                $grade=$tab['grade'];

                                ?>
                             <option value="<?=$civ?> <?=$nom?> <?=$prenom?> <?=$grade?>"> <?=$civ?> <?=$nom?> <?=$prenom?> <?=$grade?> </option>
                               <?php
                           }
                        ?>
                    </select>
                    
                    <label for="rapporteur_ext">Rapporteur_ext:</label><br>
                    <select name="rapporteurExt" id="rapporteur_ext" class="form-control"><br>
                        <?php
                        
                        include_once 'connexion_php';
                        $req2=mysqli_query($con, "SELECT * FROM professeur ");
                        while($tab=mysqli_fetch_assoc($req2)) {
                            $civ=$tab['civilite'];
                            $nom=$tab['nom'];
                            $prenom=$tab['prenom'];
                            $grade=$tab['grade'];

                            ?>
                         <option value="<?=$civ?> <?=$nom?> <?=$prenom?> <?=$grade?>"> <?=$civ?> <?=$nom?> <?=$prenom?> <?=$grade?> </option>
                           <?php
                       }
                    ?>
                    </select>

                    <label for="date">Date:</label><br>
                    <input type="date" name="date" id="date" class="form-control" placeholder="aaaa-mm-jj" required pattern="\d{4}-\d{2}-\d{2}"><br><BR>


                </div>

                <div>
                    
                    <input type="submit" name="Ajouter" value="Ajouter" class="btn btn-primary col-md-12" id="ajouter-bouton"><br><br>


                    
                    

                </div>

            </form>

                
        </div>
        
    </body>
</html>