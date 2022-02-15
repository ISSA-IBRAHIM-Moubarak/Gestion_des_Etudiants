<?php
if (isset($_GET['ok']))
{
    require_once 'Accueil_Directeur.php';
    switch ($_GET['ok'])
    {
        //FILIERE
        //traitement pour ajouter les filieres
        case 'addf':
            require_once 'View/filiere/add.php';
        break;
        //traitement pour lister les filieres
        case 'listf':
            require_once 'Model/db.php';
            require_once 'Model/filiere.php';
            $link = listeFiliere();
            require_once 'View/filiere/list.php';
        break;
        //traitement pour modification les filieres
        case 'editf':
            require_once 'Model/db.php';
            require_once 'Model/filiere.php';
            $tab = getFiliereById_Filiere($_GET['Id_Filiere']);
            $ligne = mysqli_fetch_row($tab);
            require_once 'View/filiere/edit.php';
        break;
        //-----------------------------------------------------------------------------------------------------------
        //NIVEAU
        //traitement pour ajouter les niveaux
        case 'addn':
            require_once 'View/niveau/add.php';
        break;
        //traitement pour lister les niveaux
        case 'listn':
            require_once 'Model/db.php';
            require_once 'Model/niveau.php';
            $link = listeNiveau();
            require_once 'View/niveau/list.php';
        break;
        //traitement pour modification les niveaux
        case 'editn':
            require_once 'Model/db.php';
            require_once 'Model/niveau.php';
            $tab = getNiveauById_Niveau($_GET['Id_Niveau']);
            $ligne = mysqli_fetch_row($tab);
            require_once 'View/niveau/edit.php';
        break;
        //-----------------------------------------------------------------------------------------------------------
        //SALLE
        //traitement pour ajouter les salles
        case 'adds':
            require_once 'View/salle/add.php';
        break;
        //traitement pour lister les salles
        case 'lists':
            require_once 'Model/db.php';
            require_once 'Model/salle.php';
            $link = listeSalle();
            require_once 'View/salle/list.php';
        break;
        //traitement pour modification les salles
        case 'edits':
            require_once 'Model/db.php';
            require_once 'Model/salle.php';
            $tab = getSalleById_Salle($_GET['Id_Salle']);
            $ligne = mysqli_fetch_row($tab);
            require_once 'View/salle/edit.php';
        break;
        //-----------------------------------------------------------------------------------------------------------
        //MODULE
        //traitement pour ajouter les modules
        case 'addm':
            require_once 'View/module/add.php';
        break;
        //traitement pour lister les listes
        case 'listm':
            require_once 'Model/db.php';
            require_once 'Model/module.php';
            $link = listeModule();
            require_once 'View/module/list.php';
        break;
        //traitement pour modification les modules
        case 'editm':
            require_once 'Model/db.php';
            require_once 'Model/module.php';
            $link = getModuleById_Module($_GET['Id_Module']);
            $ligne = mysqli_fetch_row($link);
            require_once 'View/module/edit.php';
        break;
        //-----------------------------------------------------------------------------------------------------------
        //EVALUATION
        //traitement pour ajouter les Evaluations
        case 'addeva':
            require_once 'View/evaluation/add.php';
        break;
        //traitement pour lister les Evaluations
        case 'listeva':
            require_once 'Model/db.php';
            require_once 'Model/Evaluation.php';
            $link = listeEvaluation();
            require_once 'View/evaluation/list.php';
        break;
        //traitement pour modification les Evaluations
        case 'editeva':
            require_once 'Model/db.php';
            require_once 'Model/evaluation.php';
            $link = getEvaluationById_Evaluation($_GET['Id_Evaluation']);
            $ligne = mysqli_fetch_row($link);
            require_once 'View/evaluation/edit.php';
        break;
    }
}
elseif (isset($_GET['page_agent']))
{
    require_once 'Accueil_Agent.php';
    switch ($_GET['page_agent'])
    {
        //ETUDIANT
        //traitement pour ajouter les Etudiants
        case 'ajouteEtudiant':
            require_once 'View/etudiant/add.php';
        break;
        //traitement pour lister les Etudiants
        case 'listeEtudiant':
            require_once 'Model/db.php';
            require_once 'Model/etudiant.php';
            $link = listeEtudiant();
            require_once 'View/etudiant/list.php';
        break;
        //traitement pour modification les Etudiants
        case 'editeEtudiant':
            require_once 'Model/db.php';
            require_once 'Model/etudiant.php';
            $tab = getEtudiantByMatricule($_GET['Matricule']);
            $ligne = mysqli_fetch_row($tab);
            require_once 'View/etudiant/edit.php';
        break;
    }
}
else
{
    
}

?>