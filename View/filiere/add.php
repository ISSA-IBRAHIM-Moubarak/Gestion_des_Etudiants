<!DOCTYPE html>
<html lang='fr'>
<head>
<meta charset='utf-8'>
<title>Ajout Filiere</title>
<link rel="stylesheet" type="text/css" href="./Style/bootstrap-cerulean.min.css">
<link rel="stylesheet" type="text/css" href="./Style/style.css">
</head>
<body>
    <div class="container col-md-6 col-md-offset-3 spacer">
        <div class="panel panel-info">
            <div class="panel-heading">Formulaire d'Ajout Filière</div>
            <div class="panel-boby">
                <form action="Controller/filiereController.php" method="POST">
                <div class="form-group">
                    <label for="" class="control-label">Libellé</label>
                    <input type="text" name="Libelle_Filiere" required placeholder="Entrez le libellé de la filière" class="form-control">
                </div>
                <button type="submit" name="valider" class="btn btn-success">Valider</button>
                <button type="reset" name="annuler" class="btn btn-danger">Annuler</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>