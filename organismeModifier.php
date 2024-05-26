<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Modifier-les-organismes</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">


    </head>
    <body>

        <?php
                include_once 'connexion.php';
                $id=$_GET['idorg'];
                $result= mysqli_query($con , "SELECT * FROM organisme WHERE idorg = '$id'");
                $row=mysqli_fetch_assoc($result);
                


                   if(isset($_POST['modifier-bouton'])){
                    $idorg=$_POST['idorg'];
                    $design=$_POST['design'];
                    $lieu=$_POST['lieu'];

                    
                        $req = mysqli_query($con, "UPDATE organisme SET idorg = '$idorg' , design = '$design' , lieu = '$lieu' WHERE idorg = '$id'");
                    
                        if($req){
                            header("location: organismeListe.php");
                        }else {
                            echo "organisme non modifié";
                        }
        
                
                    

                }
        ?>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
 
        <div id="divOrganisme" class="container row">

                
                <ul>

                <il id="lienEtudiant"> <a  role="button" class="btn btn-primary"href="etudiant.php">ETUDIANT</a> </il>
                <il id="lienProfesseur"> <a role="button" class="btn btn-primary" href="professeur.php">PROFESSEUR</a> </il>
                <il id="lienSoutenance"> <a role="button" class="btn btn-primary" href="soutenance.php">SOUTENANCE</a></il>
                <il><a  role="button" class="btn btn-primary"   href="organisme.php"> ORGANISMES</a></il>

                
                </ul>

                <form  method="post" name="Organisme" action="">

                    <h2>Modifier une organisme</h2>
                    
                    <div class="form-group">

                        <label for="idorg">idorg:</label><br>
                        <input type="text" value="<?php echo $row['idorg']?>" name="idorg" id="idorg" class="form-control" ><br>
                        
                        <label for="design">design:</label><br>
                        <input type="text" value="<?php echo $row['design']?>" name="design" id="design" class="form-control"><br>
                        
                        <label for="lieu">lieu:</label><br>
                        <input type="text" value="<?php echo $row['lieu']?>" name="lieu" id="lieu" class="form-control"><br><br>

                    </div>

                    <div >
                    
                        <input type="submit" value="Ajouter" class="btn btn-primary col-md-12" name="modifier-bouton">


                    </div>
                </form>
            </div>

        



            

    </body>
</html>