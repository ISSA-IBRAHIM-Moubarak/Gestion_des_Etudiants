<!DOCTYPE html>
<html lang='fr'>
<head>
<meta charset='utf-8'>
<title>Mise à jour Niveau</title>
<link rel="stylesheet" type="text/css" href="./Style/bootstrap-cerulean.min.css">
<link rel="stylesheet" type="text/css" href="./Style/style.css">
</head>
<body>
    <div class="container col-md-6 col-md-offset-3 spacer">
        <div class="panel panel-info">
            <div class="panel-heading">Formulaire d'Edition Niveau d'Etude</div>
            <div class="panel-boby">
                <form action="Controller/niveauController.php" method="POST">
                <div class="form-group">
                    <label for="" class="control-label">N° Niveau</label>
                    <input type="text" name="Id_Niveau" placeholder="Entrez le libelle" class="form-control" readonly="readonly" value="<?Php echo $ligne[0]?>">
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Libellé</label>
                    <input type="text" name="Libelle_Niveau" required placeholder="Entrez le libellé du niveau" class="form-control" value="<?Php echo $ligne[1]?>">
                </div>
                <button type="submit" name="modif" class="btn btn-warning">Modifier</button>
                <button type="reset" name="annuler" class="btn btn-danger">Annuler</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>