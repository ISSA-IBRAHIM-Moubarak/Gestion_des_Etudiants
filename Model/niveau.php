<?php
        function addNiveau($Libelle_Niveau)
        {
                $sql = "INSERT INTO Niveau VALUES (null, '$Libelle_Niveau')";
                return executeSQL($sql);
        }

        function listeNiveau()
        {
                $sql = "SELECT * FROM Niveau";
                return executeSQL($sql);
        }

        function deleteNiveau($Id_Niveau)
        {
                $sql = "DELETE FROM Niveau WHERE Id_Niveau = '$Id_Niveau' ";
                return executeSQL($sql);
        }

        function updateNiveau($Id_Niveau, $Libelle_Niveau)
        {
                $sql = "UPDATE Niveau SET Libelle_Niveau = '$Libelle_Niveau' WHERE Id_Niveau = '$Id_Niveau' ";
                return executeSQL($sql);
        }

        function getNiveauById_Niveau($Id_Niveau)
        {
                $sql = "SELECT * FROM Niveau WHERE Id_Niveau = '$Id_Niveau' ";
                return executeSQL($sql);
        }
?>
