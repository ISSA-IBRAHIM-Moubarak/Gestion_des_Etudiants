<?php
    require_once '../Model/db.php';
    require_once '../Model/filiere.php';
    //traitement pour ajout
    if (isset($_POST['valider']))
    {
        $Libelle_Filiere = $_POST['Libelle_Filiere'];
        addFiliere($Libelle_Filiere);
        header("Location:http://localhost/GestionE/?ok=listf");
    }

    //traitement pour suppresion
    if (isset($_GET['Id_Filiere']))
    {
        deleteFiliere($_GET['Id_Filiere']);
        header("Location:http://localhost/GestionE/?ok=listf");
    }

     //traitement pour modification
     if (isset($_POST['modif']))
     {
         $Id_Filiere = $_POST['Id_Filiere'];
         $Libelle_Filiere = $_POST['Libelle_Filiere'];
         updateFiliere($Id_Filiere, $Libelle_Filiere);
         header("Location:http://localhost/GestionE/?ok=listf");
     }
?>