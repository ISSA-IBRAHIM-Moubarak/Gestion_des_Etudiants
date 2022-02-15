<?php
// pour l'ajout
    function addEvaluation($Matricule, $Id_Module, $Note_Evaluation, $Type_Evaluation)
    {
            $sql = "INSERT INTO Evaluation VALUES (null, '$Matricule',$Id_Module, $Note_Evaluation, '$Type_Evaluation')";
            return executeSQL($sql);
    }
// pour le listage
    function listeEvaluation()
        {
                $sql = "SELECT * FROM Evaluation";
                return executeSQL($sql);
        }
//pour la suppression
        function deleteEvaluation($Id_Evaluation)
        {
                $sql = "DELETE FROM Evaluation WHERE Id_Evaluation = '$Id_Evaluation' ";
                return executeSQL($sql);
        }
//pour la modification
   function updateEvaluation($Id_Evaluation, $Matricule, $Id_Module, $Note_Evaluation, $Type_Evaluation)
        {
                $sql = "UPDATE Evaluation SET Note_Evaluation= $Note_Evaluation, Type_Evaluation='$Type_Evaluation' WHERE Id_Evaluation = '$Id_Evaluation' ";
                return executeSQL($sql);
        }

   function getEvaluationById_Evaluation($Id_Evaluation)
        {
                $sql = "SELECT * FROM Evaluation WHERE Id_Evaluation = '$Id_Evaluation' ";
                return executeSQL($sql);
        }
        
?>