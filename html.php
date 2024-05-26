<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PROCES-VERBAL</title>
        <style>
                body{
                    
                    align-items: center;
                    justify-content: center;
                    min-height: 100vh;
                    position: relative;
    
                }
                .entete{
                    text-align: center;
                }
        </style>
        <?php
         $id=$_GET['matriculederec']??""; 
        ?>

        <?php
            include_once 'connexion.php';
        
           
            $req=mysqli_query($con,"SELECT nom FROM etudiant WHERE matricule LIKE '% ".$id. "%' ");
            $res=mysqli_query($con,"SELECT * FROM soutenir WHERE matricule LIKE '% ".$id. "%' ");
            
                $row=mysqli_fetch_assoc($req);
                $nom=$row['nom']??"";

                
                $tab=mysqli_fetch_assoc($res);
                

            
        ?>

    
    </head>
    <body>
    <ul>

        <il id="lienEtudiant"><a role="button" class="btn btn-primary"  href="etudiant.php">ETUDIANT</a></il>
        <il id="lienProfesseur"> <a role="button" class="btn btn-primary"  href="professeur.php">PROFESSEUR</a></il>
        <il id="lienOrganisation"> <a role="button" class="btn btn-primary"  href="organisme.php">ORGANISME</a></il>
        <il><a  role="button" class="btn btn-primary"  href="soutenance.php"> SOUTENANCE</a></il>
        <a  role="button" class="btn btn-successS"  href="pdf.php"> Generer un pdf</a>


    </ul>

        <div class="container">
            <div style="border: 3px solid black; padding: 10px;">
                <div class="entete">
                    <p>PROCES VERBAL<br></p>
                </div>
                <div class="entete">
                    <?php
                    $req=mysqli_query($con,"SELECT * FROM etudiant WHERE matricule LIKE '% ".$id. "%' ");
                    while($row=mysqli_fetch_assoc($req)){
                        echo '<p>SOUTENANCE DE FIN DETUDES POUR L OBTENTION DU DIPLOME DE LICENCE PROFESSIONNELLE</p>';


                        if($row['niveau']=="L3"){
                            echo '<p>SOUTENANCE DE FIN DETUDES POUR L OBTENTION DU DIPLOME DE LICENCE PROFESSIONNELLE</p>';
                            
                        }elseif($row['niveau']=="M2"){
                            echo '<p>SOUTENANCE DE FIN DETUDES POUR L OBTENTION DU DIPLOME DE MASTER PROFESSIONNELLE</p>';

                        }else{
                            echo'Bonjour';
                        }
                    }
                    ?>
                </div>
                <div class="entete">
                    <p><strong>Mention:</strong>Informatique</p>

                    <?php
                        if($row['parcours']=="GB"){
                            echo '<p><strong>Parcours:</strong>Genie locigiel et Base de donnée</p>';
                            
                        }elseif($row['parcours']=='SR'){
                            echo '<p><strong>Parcours:</strong>Administration Systèmes et Réseaux </p>';

                        }else{
                            echo '<p><strong>Parcours:</strong>Informatique Générale</p>';

                        }
                    ?>

                </div>
                <div> 
         
                    
                      <p>Mr/Mlle/Mme <?php $nom ?> <?php echo $row['prenom'];?> </p>'
                    
                    <p>

                        <?php
                           if($row['niveau']=='L3'){
                                echo '                            
                                a soutenu publiquement sa mémoire de fin d études pour l obtention du diplôme licence.<br>
                                ';
                            }elseif($row['niveau']=='M2'){
                                echo '
                                a soutenu publiquement sa mémoire de fin d études pour l obtention du diplôme master.<br>
                                ';
                            }else{
                                echo'Bonjour';
                            }
                            if(!$tab['note']){
                                echo'Bonjour';
                            }else{
                                ?>
                               <p> Après la délibération, la commision des membres du  jury a attribué le note de <?=$tab=['note']?>
                                
                                <?php
                            }
                        ?>
                    </p>
                </div>
        
                <div>
                    <p><u>Membre des jury</u></p>
                    
                      
                        <p><strong>President:</strong> <?=$tab['president']?> </p>
                        <p><strong>Examinateur:</strong><?=$tab['examinateur']?> </p>
                        <p><strong>Rapporteur:</strong> <?=$tab['rapporteurInt']?> et <?=$tab=['rapporteurExt']?> </p>
                        
                    
                </div>

            </div>
            <div class="form-group">
                <form method="GET" action="pvhtml.php">
                    <input type="text" name="maticule" class="form-control">
                    <button type="submit" name="pv"  class="btn btn-primary">ENVOYER</button>

                </form>
                <a  role="button" class="btn btn-primary"  href="soutenanceListe.php"> Generer un pdf</a>

            </div>
    
        </div>
    </body>
<html>