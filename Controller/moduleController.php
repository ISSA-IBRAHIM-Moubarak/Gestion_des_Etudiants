<?php
    require_once '../Model/db.php';
    require_once '../Model/module.php';
    //traitement pour ajout
    if (isset($_POST['valider']))
    {
        $Libelle_Module = $_POST['Libelle_Module'];
        $Duree = $_POST['Duree'];
        $Coefficient = $_POST['Coefficient'];
        $Id_Salle = $_POST['Id_Salle'];
        addModule($Libelle_Module, $Duree, $Coefficient, $Id_Salle);
        header("Location:http://localhost/GestionE/?ok=listm");
    }

    //traitement pour suppresion
    if (isset($_GET['Id_Module']))
    {
        deleteModule($_GET['Id_Module']);
        header("Location:http://localhost/GestionE/?ok=listm");
    }

     //traitement pour modification
     if (isset($_POST['modif']))
     {
        $Id_Module = $_POST['Id_Module'];
        $Libelle_Module = $_POST['Libelle_Module'];
        $Duree = $_POST['Duree'];
        $Coefficient = $_POST['Coefficient'];
        $Id_Salle = $_POST['Id_Salle'];
        updateModule($Id_Module, $Libelle_Module, $Duree, $Coefficient, $Id_Salle);
        header("Location:http://localhost/GestionE/?ok=listm");
     }

?>