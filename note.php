<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Note-entre-deux-date</title>
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

            #note{
                background-color: #f6f8f8;
                padding: 25px;
                box-shadow: 0 0 10px rgba(0,0,0,0.2);
                border-radius: 6px;
            }
    </style>



</head>
<body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

    <div class="container table-responsive-md" id="note">
    <ul>

        <il id="lienEtudiant"><a role="button" class="btn btn-primary"  href="etudiant.php">ETUDIANT</a></il>
        <il id="lienProfesseur"> <a role="button" class="btn btn-primary"  href="professeur.php">PROFESSEUR</a></il>
        <il id="lienOrganisation"> <a role="button" class="btn btn-primary"  href="organisme.php">ORGANISME</a></il>
        <il><a  role="button" class="btn btn-primary"  href="soutenance.php"> SOUTENANCE</a></il>
    
    </ul>

            <h2>LES NOTES ENTRE DEUX DATES</h2><br><br>
        <form  method="get" action="">
            <div class="form-group row">
                <label for="date1" class="col-sm-2 col-form-label">1er date</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" name="date1">
                </div>
            </div><br>
            <div class="form-group row">
                <label for="date2" class="col-sm-2 col-form-label">2eme date</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" name="date2">
                </div>
            </div><br>

                
            <div class="form-group row">
            <div class="col-sm-10">
            <i class="fas fa-search"><button type="submit" class="btn btn-primary" name="notedeux" > Note entre ses deux dates</button></i>
            </div>
            </div><br><br>


        </form>

        
        <table class="table">
            <thead>
                <tr>
                
                <th >Matricule</th>
                <th >Note</th>
                <th >Date</th>
                </tr>
            </thead>
            <tbody >

                <?php 

                    include_once "connexion.php";
                                            
                    $date1=$_GET['date1']??"";
                    $date2=$_GET['date2']??"";

                    $originalDate1 = $_GET['date1']??"";
                    $originalDate2 = $_GET['date2']??"";
                    
                    $timestamp1 = strtotime($originalDate1); 
                    $Date1 = date("d-m-Y", $timestamp1 );

                    $timestamp2 = strtotime($originalDate2); 
                    $Date2 = date("d-m-Y", $timestamp2 );
    

                    if(isset($_GET['notedeux'])) {  
                        
                        $resultat=mysqli_query($con, "SELECT matricule, note, mydate FROM soutenir WHERE mydate BETWEEN '$date1' and '$date2' ");
  
                        while( $row=mysqli_fetch_assoc($resultat)){
                           
                             
                            ?>      
                                <tr class="class-primary">
                                    <td><?=$row['matricule']?></td>
                                    <td><?=$row['note']?></td>
                                    <td><?=$row['mydate']?></td>
                                        
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