<?php
        function addEtudiant($Matricule, $Nom, $Prenom, $Genre, $Nationalite, $Date_Naissance, $Lieu_Naissance, $Telephone, $email, $Adresse, $Id_Filiere, $Id_Niveau)
        {
                $sql = "INSERT INTO Etudiant VALUES ('$Matricule', '$Nom', '$Prenom', '$Genre', '$Nationalite', '$Date_Naissance', '$Lieu_Naissance', $Telephone, '$email', '$Adresse', $Id_Filiere, $Id_Niveau)";
                return executeSQL($sql);
        }

        function listeEtudiant()
        {
                $sql = "SELECT * FROM Etudiant";
                return executeSQL($sql);
        }

        function deleteMatricule($Matricule)
        {
                $sql = "DELETE FROM Etudiant WHERE Matricule = '$Matricule' ";
                return executeSQL($sql);
        }

        function updateEtudiant($Matricule, $Nom, $Prenom, $Genre, $Nationalite, $Date_Naissance, $Lieu_Naissance, $Telephone, $email, $Adresse, $Id_Filiere, $Id_Niveau)
        {
                $sql = "UPDATE Etudiant SET Matricule='$Matricule', Nom='$Nom', Prenom='$Prenom', Genre='$Genre', Nationalite='$Nationalite', Date_Naissance='$Date_Naissance', Lieu_Naissance='$Lieu_Naissance', Telephone=$Telephone, email='$email', Adresse='$Adresse', Id_Filiere='$Id_Filiere', Id_Niveau='$Id_Niveau' WHERE Matricule = '$Matricule' ";
                return executeSQL($sql);
        }

        function getEtudiantByMatricule($Matricule)
        {
                $sql = "SELECT * FROM Etudiant WHERE Matricule = '$Matricule' ";
                return executeSQL($sql);
        }
?>
