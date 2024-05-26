<?php
   include_once 'connexion.php';
    $id=$_GET['matriculederec']??"";

    $req1=mysqli_query($con,"SELECT * FROM soutenir WHERE soutenir.matricule='$id'");
    $row=mysqli_fetch_assoc($req1);

    $req=mysqli_query($con,"SELECT * FROM etudiant WHERE etudiant.matricule='$id'");
    $row1=mysqli_fetch_assoc($req);



    use Dompdf\Dompdf;
    use Dompdf\Options;

    ob_start();
    require_once 'html1.php';
    $html = ob_get_contents();
    ob_end_clean();
    require_once 'dompdf/autoload.inc.php';
    
    $options = new Options();
    $options->set('defaultFont', 'Times new roman');
    $dompdf= new Dompdf($options);

    $dompdf = new Dompdf();

    $dompdf->loadhtml($html);

    $dompdf->setPaper('A4');

    $dompdf->render();

    $dompdf->stream('Proces-verbal', array('Attachment'=> 0));
?>