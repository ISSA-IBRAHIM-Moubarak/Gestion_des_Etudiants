<?php
    require_once '../Model/db.php';
    require_once '../Model/evaluation.php';
    //traitement pour ajout
    if (isset($_POST['valider']))
    {
        $Matricule = $_POST['Matricule'];
        $Id_Module = $_POST['Id_Module'];
        $Note_Evaluation = $_POST['Note_Evaluation'];
        $Type_Evaluation = $_POST['Type_Evaluation'];
        addEvaluation($Matricule, $Id_Module, $Note_Evaluation, $Type_Evaluation);
        header("Location:http://localhost/GestionE/?ok=listeva");
    }

    //traitement pour suppresion
    if (isset($_GET['Id_Evaluation']))
    {
        deleteEvaluation($_GET['Id_Evaluation']);
        header("Location:http://localhost/GestionE/?ok=listeva");
    }

     //traitement pour modification
     if (isset($_POST['modif']))
     {
        $Id_Evaluation = $_POST['Id_Evaluation'];
        $Matricule = $_POST['Matricule'];
        $Id_Module = $_POST['Id_Module'];
        $Note_Evaluation = $_POST['Note_Evaluation'];
        $Type_Evaluation = $_POST['Type_Evaluation'];
        updateEvaluation($Id_Evaluation, $Matricule, $Id_Module, $Note_Evaluation, $Type_Evaluation);
        header("Location:http://localhost/GestionE/?ok=listeva");
     }

?>