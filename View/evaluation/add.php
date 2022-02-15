<!DOCTYPE html>
<html lang='fr'>
<head>
<meta charset='utf-8'>
<title>Ajout Evaluation</title>
<link rel="stylesheet" type="text/css" href="./Style/bootstrap-cerulean.min.css">
<link rel="stylesheet" type="text/css" href="./Style/style.css">
</head>
<body>
    <div class="container col-md-6 col-md-offset-3 spacer">
        <div class="panel panel-info">
            <div class="panel-heading">Formulaire d'Ajout Evaluation</div>
            <div class="panel-boby">
                <form action="Controller/evaluationController.php" method="POST">
                <div class="form-group">
                    <label for="" class="control-label">Etudiant</label>
                    <select name="Matricule" class="form=control">
                        <option value="">Faites votre choix...</option>
                        <?php
                            require_once 'Model/db.php';
                            require_once 'Model/etudiant.php';
                            $listE = listeEtudiant();
                            while ($ligne = mysqli_fetch_row($listE))
                            {
                                echo "<option value='$ligne[0]'>$ligne[1]</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Module</label>
                    <select name="Id_Module" class="form=control">
                        <option value="">Faites votre choix...</option>
                        <?php
                            require_once 'Model/db.php';
                            require_once 'Model/module.php';
                            $listM = listeModule();
                            while ($ligne = mysqli_fetch_row($listM))
                            {
                                echo "<option value='$ligne[0]'>$ligne[1]</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Note</label>
                    <input type="number" step="0.001" name="Note_Evaluation" required placeholder="Entrez la Note de l'évaluation" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Type d'évaluation</label>
                    <select name="Type_Evaluation" class="form=control">
                        <option value="Test">Test</option>
                        <option value="Examen">Examen</option>
                    </select>
                </div>
                <button type="submit" name="valider" class="btn btn-success">Valider</button>
                <button type="reset" name="annuler" class="btn btn-danger">Annuler</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>