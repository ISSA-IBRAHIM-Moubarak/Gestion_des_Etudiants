<?php
    require_once '../Model/db.php';
    require_once '../Model/etudiant.php';
    //traitement pour ajout
    if (isset($_POST['valider']))
    {
        $Matricule = $_POST['Matricule'];
        $Nom = $_POST['Nom'];
        $Prenom = $_POST['Prenom'];
        $Genre = $_POST['Genre'];
        $Nationalite = $_POST['Nationalite'];
        $Date_Naissance = $_POST['Date_Naissance'];
        $Lieu_Naissance = $_POST['Lieu_Naissance'];
        $Telephone = $_POST['Telephone'];
        $email = $_POST['email'];
        $Adresse = $_POST['Adresse'];
        $Id_Filiere = $_POST['Id_Filiere'];
        $Id_Niveau = $_POST['Id_Niveau'];
        addEtudiant($Matricule, $Nom, $Prenom, $Genre, $Nationalite, $Date_Naissance, $Lieu_Naissance, $Telephone, $email, $Adresse, $Id_Filiere, $Id_Niveau);
        header("Location:http://localhost/GestionE/?page_agent=listeEtudiant");
    }

    //traitement pour suppresion
    if (isset($_GET['Matricule']))
    {
        deleteMatricule($_GET['Matricule']);
        header("Location:http://localhost/GestionE/?page_agent=listeEtudiant");
    }

     //traitement pour modification
     if (isset($_POST['modif']))
     {
        $Matricule = $_POST['Matricule'];
        $Nom = $_POST['Nom'];
        $Prenom = $_POST['Prenom'];
        $Genre = $_POST['Genre'];
        $Nationalite = $_POST['Nationalite'];
        $Date_Naissance = $_POST['Date_Naissance'];
        $Lieu_Naissance = $_POST['Lieu_Naissance'];
        $Telephone = $_POST['Telephone'];
        $email = $_POST['email'];
        $Adresse = $_POST['Adresse'];
        $Id_Filiere = $_POST['Id_Filiere'];
        $Id_Niveau = $_POST['Id_Niveau'];
        updateEtudiant($Matricule, $Nom, $Prenom, $Genre, $Nationalite, $Date_Naissance, $Lieu_Naissance, $Telephone, $email, $Adresse, $Id_Filiere, $Id_Niveau);
        header("Location:http://localhost/GestionE/?page_agent=listeEtudiant");
     }
?>