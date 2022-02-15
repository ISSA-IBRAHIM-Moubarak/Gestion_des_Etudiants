<?php
        function addFiliere($Libelle_Filiere)
        {
                $sql = "INSERT INTO Filiere VALUES (null, '$Libelle_Filiere')";
                return executeSQL($sql);
        }

        function listeFiliere()
        {
                $sql = "SELECT * FROM Filiere";
                return executeSQL($sql);
        }

        function deleteFiliere($Id_Filiere)
        {
                $sql = "DELETE FROM Filiere WHERE Id_Filiere = '$Id_Filiere' ";
                return executeSQL($sql);
        }

        function updateFiliere($Id_Filiere, $Libelle_Filiere)
        {
                $sql = "UPDATE Filiere SET Libelle_Filiere = '$Libelle_Filiere' WHERE Id_Filiere = '$Id_Filiere' ";
                return executeSQL($sql);
        }

        function getFiliereById_Filiere($Id_Filiere)
        {
                $sql = "SELECT * FROM Filiere WHERE Id_Filiere = '$Id_Filiere' ";
                return executeSQL($sql);
        }
?>
