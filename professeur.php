<!DOCTYPE html>

<html>

    <head>

        <title>PROFESSEUR</title>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <link rel="stylesheet" href="professeur.css">

        <style>
           body{
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            position: relative;
            padding: 30px;

        } 
        </style>

    </head>

    <body>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>



            <div id="divProfesseur">

                
                <ul>

                    <il id="lienEtudiant"> <a href="etudiant.php"role="button"  class=" btn btn-primary" >ETUDIANT</a></il>
                    <il id="lienOrganisation"><a href="organisme.php"role="button"  class=" btn btn-primary" >ORGANISME</a></il>
                    <il id="lienSoutenance"><a href="soutenance.php"role="button"  class=" btn btn-primary"  >SOUTENANCE</a></il>
                    <il><a  role="button"  class=" btn btn-success" href="professeurLite.php">LISTER LES PROFESSEURS</a><br><br></il>

                </ul>

            

                <form method="post" name="professeur" action="professeurAjout.php">

                    <h2>Veuillez saisir ici les informations à propos<br> du professeur</h2>

                    <div class="form-group">

                        <label for="idprof">Identifiant du professeur:</label><br>
                        <input type="text" name="idprof" id="idprof" class="form-control"><br>
                        
                        <label for="Nom">Nom:</label><br>
                        <input type="text"name="nom" id="nom" class="form-control"><br>
                        
                        <label for="prenom">Prénom:</label><br>
                        <input type="text"name="prenom" id="prenom" class="form-control"><br>

                    </div>
                    
                    <div>

                        <label for="civilite">civilité:</label><br>
                        <select name="civilite" id="civilite" class="form-control">
                            <option value="Mr">Mr</option>
                            <option value="Mlle">Mlle</option>
                            <option value="Mme">Mme</option>
                        </select><br>

                        <label for="grade-select">grade:</label><br>
                        <select name="grade" id="grade-select" class="form-control">
                            <option value="Professeur-titulaire">Professeur titulaire</option>
                            <option value="Maitre-de-Conferences">Maître de Conférences</option>
                            <option value="Assistant-d-Enseignement-Supérieur-et-de-Recherche">Assistant d'Enseignement Supérieur et de Recherche</option>
                            <option value="Docteur-HDR">Docteur HDR</option>
                            <option value="Docteur-en-informatique">Docteur en informatique</option>
                            <option value="Doctorat-en-informatique">Doctorat en informatique</option>
                        </select><br><br>

                        <div>
                            
                            <input type="submit" value="Ajouter" class="btn btn-primary col-md-12" name="ajouter-bouton"><br><br>

                           

                        </div>

                    </div>
                </form>
            </div>
    
    </body>
</html>