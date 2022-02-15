<?php
// pour l'ajout
    function addModule($Libelle_Module, $Duree, $Coefficient, $Id_Salle)
    {
            $sql = "INSERT INTO Module VALUES (null, '$Libelle_Module', '$Duree', $Coefficient, $Id_Salle)";
            return executeSQL($sql);
    }
// pour le listage
    function listeModule()
        {
                $sql = "SELECT * FROM Module";
                return executeSQL($sql);
        }
//pour la suppression
        function deleteModule($Id_Module)
        {
                $sql = "DELETE FROM Module WHERE Id_Module = '$Id_Module' ";
                return executeSQL($sql);
        }
//pour la modification
   function updateModule($Id_Module, $Libelle_Module, $Duree, $Coefficient, $Id_Salle)
        {
                $sql = "UPDATE Module(Libelle_Module, Duree, Coefficient,) SET Libelle_Module = '$Libelle_Module', Duree = '$Duree', Coefficient = $Coefficient WHERE Id_Module = '$Id_Module' ";
                return executeSQL($sql);
        }

   function getModuleById_Module($Id_Module)
        {
                $sql = "SELECT * FROM Module WHERE Id_Module = '$Id_Module' ";
                return executeSQL($sql);
        }
        
?>