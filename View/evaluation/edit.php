<!DOCTYPE html>
<html lang='fr'>
<head>
<meta charset='utf-8'>
<title>Mise à jour Evaluation</title>
<link rel="stylesheet" type="text/css" href="./Style/bootstrap-cerulean.min.css">
<link rel="stylesheet" type="text/css" href="./Style/style.css">
</head>
<body>
    <div class="container col-md-6 col-md-offset-3 spacer">
        <div class="panel panel-info">
            <div class="panel-heading">Formulaire d'Edition Evaluation</div>
            <div class="panel-boby">
                <form action="Controller/evaluationController.php" method="POST">
                <div class="form-group">
                    <label for="" class="control-label">N°Evaluation</label>
                    <input type="text" name="Id_Evaluation" class="form-control" readonly="readonly" value="<?Php echo $ligne[0]?>">
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Etudiant</label>
                    <input type="text" name="Matricule" readonly="readonly" placeholder="Entrez l'Etudiant" class="form-control" value="<?Php echo $ligne[1]?>">
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Module</label>
                    <input type="text" name="Id_Module" readonly="readonly" placeholder="Entrez le Module" class="form-control" value="<?Php echo $ligne[2]?>">
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Note Evaluation</label>
                    <input type="number" step="0.001" name="Note_Evaluation" required placeholder="Entrez la Note d'évaluation" class="form-control" value="<?Php echo $ligne[3]?>">
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Type Evaluation</label>
                    <input type="text" name="Type_Evaluation" placeholder="Entrez le Type d'èvaluation" class="form-control" value="<?Php echo $ligne[4]?>">
                </div>
                <button type="submit" name="modif" class="btn btn-warning">Modifier</button>
                <button type="reset" name="annuler" class="btn btn-danger">Annuler</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>