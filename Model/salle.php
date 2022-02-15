<?php
        function addSalle($Libelle_Salle, $Type_Salle, $Capacite)
        {
                $sql = "INSERT INTO Salle VALUES (null, '$Libelle_Salle', '$Type_Salle', '$Capacite')";
                return executeSQL($sql);
        }

        function listeSalle()
        {
                $sql = "SELECT * FROM Salle";
                return executeSQL($sql);
        }

        function deleteSalle($Id_Salle)
        {
                $sql = "DELETE FROM Salle WHERE Id_Salle = '$Id_Salle' ";
                return executeSQL($sql);
        }

        function updateSalle($Id_Salle, $Libelle_Salle, $Type_Salle, $Capacite)
        {
                $sql = "UPDATE Salle SET Libelle_Salle = '$Libelle_Salle', Type_Salle = '$Type_Salle', Capacite = '$Capacite' WHERE Id_Salle = '$Id_Salle' ";
                return executeSQL($sql);
        }

        function getSalleById_Salle($Id_Salle)
        {
                $sql = "SELECT * FROM Salle WHERE Id_Salle = '$Id_Salle' ";
                return executeSQL($sql);
        }
?>
