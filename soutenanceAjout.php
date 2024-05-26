<?php 
            include_once 'connexion.php';
            if(isset($_POST['Ajouter'])){
                $matricule=$_POST['matricule'];
                $idorg=$_POST['idorg'];
                $anneeUniv=$_POST['anneeUniv'];
                $note=$_POST['note'];
                $president=$_POST['president'];
                $examinateur=$_POST['examinateur'];
                $rapporteurInt=$_POST['rapporteurInt'];
                $rapporteurExt=$_POST['rapporteurExt'];
                $date=$_POST['date'];

              
                $req=mysqli_query($con, "INSERT INTO `soutenir`(`matricule`, `idorg`, `anneeUniv`, `note`, `president`, `examinateur`, `rapporteurInt`, `rapporteurExt`, `mydate`) VALUES ('$matricule','$idorg','$anneeUniv','$note','$president','$examinateur','$rapporteurInt','$rapporteurExt','$date');");

                if($req){
                    header('location:soutenanceListe.php');

                }else{
                    echo 'soutenance non enregistrer';
                }
            }
            

        ?>
