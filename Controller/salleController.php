<?php
    require_once '../Model/db.php';
    require_once '../Model/salle.php';
    //traitement pour ajout
    if (isset($_POST['valider']))
    {
        $Libelle_Salle = $_POST['Libelle_Salle'];
        $Type_Salle = $_POST['Type_Salle'];
        $Capacite = $_POST['Capacite'];
        addSalle($Libelle_Salle, $Type_Salle, $Capacite);
        header("Location:http://localhost/GestionE/?ok=lists");
    }

    //traitement pour suppresion
    if (isset($_GET['Id_Salle']))
    {
        deleteSalle($_GET['Id_Salle']);
        header("Location:http://localhost/GestionE/?ok=lists");
    }

     //traitement pour modification
     if (isset($_POST['modif']))
     {
        $Id_Salle = $_POST['Id_Salle'];
        $Libelle_Salle = $_POST['Libelle_Salle'];
        $Type_Salle = $_POST['Type_Salle'];
        $Capacite = $_POST['Capacite'];
         updateSalle($Id_Salle, $Libelle_Salle, $Type_Salle, $Capacite);
         header("Location:http://localhost/GestionE/?ok=lists");
     }
?>