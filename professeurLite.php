<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Professeur-liste</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

        <style>
            body{
                display: flex;
                align-items: center;
                justify-content: center;
                min-height: 100vh;
                position: relative;
            }

            img{
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
            <h3>LA LISTE DES PROFESSEURS</h3><br>
            <H4>1-Recherche d'un professeur</H4>

            <div class="input-group rounded">
                <form>
                    <div class="input-group rounded">
                        <input type="search"  name="mitady" class="form-control rounded" placeholder="idprof" aria-label="Search" aria-describedby="search-addon" /><br><br>
                        <span class="input-group-text border-0" id="search-addon" >
                            <i class="fas fa-search"><input  type ="submit"style="border-radius: 5px; color: black; background-color: teal;" class="btn-btn-success" name="recherche"></i>
                        </span>
                    </div>
                </form>
            </div><br><br>
            <table class="table table-bordered">

<thead>
    <tr class="bg-primary">
        <th>idprof</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Civilite</th>
        <th>Grade</th>
        <th>Modifier</th>
        <th>Supprimer</th>
        
        
    </tr>
</thead>


<tbody >
<?php 
    include_once "connexion.php";
    $id=$_GET['mitady']??"";
    $req = mysqli_query($con , "SELECT * FROM professeur WHERE idprof LIKE '%" .$id. "%' ");
    
    if(isset($_GET['recherche'])){
        if(mysqli_num_rows($req) == 0){
        echo "Il n'y a pas encore de professeur ajoute !" ;
        
        }else {
            while($row=mysqli_fetch_assoc($req)){
                ?>
                <tr class="class-primary">
                    <td><?=$row['idprof']?></td>
                    <td><?=$row['nom']?></td>
                    <td><?=$row['prenom']?></td>
                    <td><?=$row['civilite']?></td>
                    <td><?=$row['grade']?></td>
                    <td><a href="professeurModifier.php?idprof=<?=$row['idprof'];?>" role="button"><img src="pen.png"></a></td>
                    <td><a href="professeurSupprimer.php?idprof=<?=$row['idprof'];?>" role="button"><img src="trash.png"></a></td>

                </tr>
            <?php
        }
        
        }
    }
?>

</tbody>
</table>


            <h4>2-La liste des professeur</h4>
            <table class="table table-bordered">

                <thead>
                    <tr class="bg-primary">
                        <th>idprof</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Civilite</th>
                        <th>Grade</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                        
                        
                    </tr>
                </thead>
    
    
                <tbody >
                <?php 
                    include_once "connexion.php";
                    $req = mysqli_query($con , "SELECT * FROM professeur");
                    
                    if(mysqli_num_rows($req) == 0){
                    echo "Il n'y a pas encore de professeur ajoute !" ;
                    
                    }else {
                        while($row=mysqli_fetch_assoc($req)){
                            ?>
                            <tr class="class-primary">
                                <td><?=$row['idprof']?></td>
                                <td><?=$row['nom']?></td>
                                <td><?=$row['prenom']?></td>
                                <td><?=$row['civilite']?></td>
                                <td><?=$row['grade']?></td>
                                <td><a href="professeurModifier.php?idprof=<?=$row['idprof'];?>" role="button"><img src="pen.png"></a></td>
                                <td><a href="professeurSupprimer.php?idprof=<?=$row['idprof'];?>" role="button"><img src="trash.png"></a></td>

                            </tr>
                        <?php
                       }
                    
                    }
                ?>

                </tbody>
            </table>
            
            <div>
                <a role="button" class="btn btn-primary" href="professeur.php">PROFESSEUR</a>
            </div>
        </div>

    </body>
</html>