<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Soutenance-Modifier</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

        <?php
           include_once 'connexion.php';

           $id=$_GET['matricule'];

           if(isset($_POST['modifier'])){

                $matricule=$_POST['matricule'];
                $idorg=$_POST['idorg'];
                $anneeUniv=$_POST['anneeUniv'];
                $note=$_POST['note'];
                $president=$_POST['president'];
                $examinateur=$_POST['examinateur'];
                $rapporteurInt=$_POST['rapporteurInt'];
                $rapporteurExt=$_POST['rapporteurExt'];
                $date=$_POST['date'];

                extract($_POST);
                
                if(isset($matricule) && isset($idorg) && isset( $anneeUniv) && isset( $note) && isset($president) && isset($examinateur) && isset($rapporteurInt) && isset($rapporteurExt) && isset($date)  ){

                    $resultat=mysqli_query($con, "UPDATE `soutenir` SET `matricule`='$matricule',`idorg`='$idorg',`anneeUniv`='$anneeUniv',`note`=$note,`president`='$president',`examinateur`='$examinateur',`rapporteurInt`='$rapporteurInt',`rapporteurExt`='$rapporteurExt',`mydate`='$date' WHERE matricule='$id'; ");

                    if ($resultat) {
                        header('location: soutenanceListe.php');
                    }else{
                        echo 'etudiant non modifie';
                        
                    }
                    
                } 
            }


           
        ?>

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


    </head>
    
    <body>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>



        <div id="divSoutenance">


            
            <form method="post" name="soutenance" action="">

                <h2>Modifier les informations d'une soutenance</h2>


                <div class="form-group">

                    <label for="matricule">Matricule:</label><br>
                    

                        <?php
                            include_once 'connexion.php';
                            $req1=mysqli_query($con, "SELECT matricule FROM soutenir WHERE matricule='$id' ");
                            while($row=mysqli_fetch_assoc($req1)){
                                $matricule1=$row['matricule']
                                ?>
                                <input type="text" value="<?=$matricule1?>" name="matricule" class="form-control">
                                <?php
                            }

                        ?>    
                    

                    <label for="idorg">Identifiant d' organisation:</label><br>
                    
                        <?php
                            include_once 'connexion.php';
                            $req2=mysqli_query($con, "SELECT idorg FROM soutenir WHERE matricule='$id' ");
                            while($row=mysqli_fetch_assoc($req2)){
                                $idorg1=$row['idorg']
                                ?>
                                <input type="text" value="<?=$idorg1?>" name="idorg" class="form-control">
                                <?php
                            }

                        ?>    

                    

                    <label for="annee_univ">Année_universitaire:</label><br>
                    <?php
                            include_once 'connexion.php';
                            $req1=mysqli_query($con, "SELECT anneeUniv FROM soutenir WHERE matricule='$id' ");
                            while($row=mysqli_fetch_assoc($req1)){
                                $annee=$row['anneeUniv']
                                ?>
                                <input type="text" name="anneeUniv" class="form-control"placeholder="aaaa-aaaa" value="<?=$annee?>" required pattern="\d{4}-\d{4}"><br>
                                <?php
                            }

                    ?>    
       
                   
                    

                    <label for="note">note:</label><br>
                    <?php
                            include_once 'connexion.php';
                            $req1=mysqli_query($con, "SELECT note FROM soutenir WHERE matricule='$id' ");
                            while($row=mysqli_fetch_assoc($req1)){
                                $note1=$row['note']
                                ?>
                                    <input type="number" name="note" id="note" class="form-control" min="0" max="20" value="<?=$note1?>"><br>
                                <?php
                            }

                    ?>    

                   

                    <label for="president">Président:</label><br>
                    <select name="president" id="president" class="form-control"><br>
                        <?php
                            include_once 'connexion_php';
                            $req2=mysqli_query($con, "SELECT * FROM professeur  ");
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
                    <?php
                            include_once 'connexion.php';
                            $req1=mysqli_query($con, "SELECT mydate FROM soutenir WHERE matricule='$id' ");
                            while($row=mysqli_fetch_assoc($req1)){
                                $date1=$row['mydate']
                                ?>
                                    <input type="date" name="date" id="date" class="form-control" placeholder="aaaa-mm-jj" required pattern="\d{4}-\d{2}-\d{2}" value="<?=$date1?>"><br><BR>
                                <?php
                            }

                        ?>    



                </div>


                <div>
                    
                    <input type="submit" name="modifier" value="Modifier" class="btn btn-primary col-md-12" id="modifier-bouton">


                </div>

            </form>
        </div>

    </body>

    
</html>
