<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proces-verbal</title>

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

        include_once 'connexion.php';  
        $id=$_GET['matriculederec']??"";
    
        /*if(isset($_GET['pv'])){
            header('location: pdf.php');
         }*/
                        


    ?>

</head>
<body>


    <div class="container">
            <div class="entete">
                <p>PROCES VERBAL<br></p>
            </div>
            <div class="entete">
                <?php

                
                while($row1=mysqli_fetch_assoc($revy1)){

                    $niveau=$row1['niveau'];

                    if($niveau=='L3'){
                        echo '<p>SOUTENANCE DE FIN DETUDES POUR L OBTENTION DU DIPLOME DE LICENCE<br>PROFESSIONNELLE</p>';
                    }elseif($niveau=='M2'){
                        echo '<p>SOUTENANCE DE FIN DETUDES POUR L OBTENTION DU DIPLOME DE MASTER<br>PROFESSIONNELLE</p>';
                    }else{
                        header('location:inter.php');
                    }
                    

                }
                ?>
            </div>
            <div class="entete">
                <p><strong>Mention:</strong>Informatique</p>
                <?php

                while($row1=mysqli_fetch_assoc($revy1)){
                    $parcours=$row1['parcours'];

                    if($parcours=="GB"){
                        echo '<p><strong>Parcours:</strong>Genie locigiel et Base de donnée</p>';
                        
                    }elseif($parcours=='SR'){
                        echo '<p><strong>Parcours:</strong>Administration Systèmes et Réseaux </p>';

                    }else{
                        echo '<p><strong>Parcours:</strong>Informatique Générale</p>';

                    }
                }
                
            
                ?>
            </div>
            <div> 
                <p>
                <?php
   
                   while($row1=mysqli_fetch_assoc($revy1)){
                    $nom=$row1['nom'];
                    $prenom=$row1['prenom'];
                    ?>
                     <p>Mr/Mlle/Mme <?php echo $nom?> <?php  echo $prenom ?> </p>
                     <?php
                   }
                ?>
                </p>
                <p>
                    <?php


                        while($row1=mysqli_fetch_assoc($revy1)){
                            $niveau=$row1['niveau']??"";

                            if($niveau=="L3"){
                                echo '<p>a soutenu publiquement sa mémoire de fin d études pour l obtention du diplôme de licence proffessionnelle.</p>';
                            }elseif($niveau=='M2'){
                                echo '<p>a soutenu publiquement sa mémoire de fin d études pour l obtention du diplôme de master proffessionnelle.</p>';
                            }else{
                                header('location:inter.php');
                            }
                        }
                    ?>
                    <?php
    
                    while($row=mysqli_fetch_assoc($req)){
                     $note=$row['note'];
                    ?>
                      Après la délibération, la commision des membres du  jury a attribué le note de <?php echo $note ?>/20.
                    
                    <?php
                    }
                    ?>
                </p>
            </div>
    
            <div>
                <p><u>Membre des jury</u></p>
                <?php
                   include 'connexion.php';
    
                    while($row=mysqli_fetch_assoc($req)){
                     $president=$row['president'];
                     $exa=$row['examinateur'];
                     $rapInt=$row['rapporteurInt'];
                     $rapExt=$row['rapporteurExt'];
                ?>
                <p><strong>President:</strong> <?php echo $president?></p>
                <p><strong>Examinateur:</strong> <?php echo $exa ?> </p>
                <p><strong>Rapporteur:</strong> <?php echo $rapInt?> et <?php echo $rapExt?></p>
                <?php
                    }
                ?>
            </div>
    
        </div>

</body>
</html>