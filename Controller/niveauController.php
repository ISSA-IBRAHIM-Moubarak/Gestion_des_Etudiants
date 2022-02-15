<?php
    require_once '../Model/db.php';
    require_once '../Model/niveau.php';
    //traitement pour ajout
    if (isset($_POST['valider']))
    {
        $Libelle_Niveau = $_POST['Libelle_Niveau'];
        addNiveau($Libelle_Niveau);
        header("Location:http://localhost/GestionE/?ok=listn");
    }

    //traitement pour suppresion
    if (isset($_GET['Id_Niveau']))
    {
        deleteNiveau($_GET['Id_Niveau']);
        header("Location:http://localhost/GestionE/?ok=listn");
    }

     //traitement pour modification
     if (isset($_POST['modif']))
     {
         $Id_Niveau = $_POST['Id_Niveau'];
         $Libelle_Niveau = $_POST['Libelle_Niveau'];
         updateNiveau($Id_Niveau, $Libelle_Niveau);
        header("Location:http://localhost/GestionE/?ok=listn");
     }
?>