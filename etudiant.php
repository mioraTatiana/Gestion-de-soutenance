<!DOCTYPE html>

<html>

    <head>

        <title>ETUDIANT</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="etudiant .css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
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


            
        <div id="divEtudiant" class="row" class="container" >

                <ul>

                    <il  id="lienProfesseur" ><a  role="button" class="btn btn-primary"role="button" href="professeur.php">PROFESSEUR</a> </il>
                    <il  id="lienOrganisation"><a  role="button" class="btn btn-primary" href="organisme.php">ORGANISME</a> </il>
                    <il id="lienSoutenance" ><a role="button" class="btn btn-primary" href=soutenance.php>SOUTENANCE</a> </il>
                    <il><a role="button" class="btn btn-success"   href="etudiantListeGlobal.php">LISTER LES ETUDIANTS</a></il>


                    
                </ul>
            

                <br><br><br>


                <form method="post" name="etudiant-inscription" action="etudiantAjout.php">

                    <h3>Ajout d' un nouveau etudiant</h3>

                    <div class="form-group">

                        <label for="matricule">Matricule:</label><br>
                        <input type="text"name="matricule" id="matricule" class="form-control"><br>

                        <label for="Nom">Nom:</label><br>
                        <input type="text"name="nom" id="nom" class="form-control"><br>

                        <label for="prenom">Prénom:</label><br>
                        <input type="text"name="prenom" id="prenom" class="form-control"><br>

                    </div>

                    <div>

                        <label for=" email">e-mail:</label><br>
                        <input type="email" name="email" id="e-mail" class="form-control"><br>

                    </div>

                    <div>

                        <label for="niveau-select">Niveau:</label><br>
                        <select name="niveau" id="niveau-select"  class="form-control">
                            <option value="L1">L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="M1">M1</option>
                            <option value="M2">M2</option>
                        </select><br>

                        <label for="parcours-select">Parcours:</label><br>
                        <select name="parcours" id="parcours-select" class="form-control">
                            <option value="GB">GB</option>
                            <option value="SR">SR</option>
                            <option value="IG">IG</option>
                        </select><br><br>

                    </div>

                    <div class="container " style="display: inline-flexbox;" id="bouton1">
                        <input type="submit" value="Ajouter" class="btn btn-primary col-md-12" name="ajouter-bouton">

                    </div>

                </form>
        </div>
        
    </body>
</html>
