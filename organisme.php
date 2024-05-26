<!DOCTYPE html>

<html>

    <head>

        <title>ORGANISME</title>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <link rel="stylesheet" href="organisme.css">
        <style>
            body{
                padding: 30px;
            }
        </style>

    </head>

    <body>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
 

        



            <div id="divOrganisme" class="container row">

                
                <ul>

                <il id="lienEtudiant"> <a  role="button" class="btn btn-primary"href="etudiant.php">ETUDIANT</a> </il>
                <il id="lienProfesseur"> <a role="button" class="btn btn-primary" href="professeur.php">PROFESSEUR</a> </il>
                <il id="lienSoutenance"> <a role="button" class="btn btn-primary" href="soutenance.php">SOUTENANCE</a></il>
                <il><a  role="button" class="btn btn-success"   href="organismeListe.php">LISTER LES ORGANISMES</a></il>

                
                </ul>

                <form  method="post" name="Organisme" action="organismeAjout.php">

                    <h2>Ajouter une organisme</h2>
                    
                    <div class="form-group">

                        <label for="idorg">idorg:</label><br>
                        <input type="text" name="idorg" id="idorg" class="form-control"><br>
                        
                        <label for="design">design:</label><br>
                        <input type="text" name="design" id="design" class="form-control"><br>
                        
                        <label for="lieu">lieu:</label><br>
                        <input type="text" name="lieu" id="lieu" class="form-control"><br><br>

                    </div>

                    <div >
                    
                        <input type="submit" value="Ajouter" class="btn btn-primary col-md-12" name="ajouter-bouton">


                    </div>
                </form>
            </div>
        
    </body>
</html>