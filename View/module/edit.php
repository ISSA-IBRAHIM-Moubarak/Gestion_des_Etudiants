<!DOCTYPE html>
<html lang='fr'>
<head>
<meta charset='utf-8'>
<title>Mise à jour Module</title>
<link rel="stylesheet" type="text/css" href="./Style/bootstrap-cerulean.min.css">
<link rel="stylesheet" type="text/css" href="./Style/style.css">
</head>
<body>
    <div class="container col-md-6 col-md-offset-3 spacer">
        <div class="panel panel-info">
            <div class="panel-heading">Formulaire d'Edition Module</div>
            <div class="panel-boby">
                <form action="Controller/moduleController.php" method="POST">
                <div class="form-group">
                    <label for="" class="control-label">N° Module</label>
                    <input type="text" name="Id_Module" placeholder="Entrez le libelle" class="form-control" readonly="readonly" value="<?Php echo $ligne[0]?>">
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Libellé</label>
                    <input type="text" name="Libelle_Module" required placeholder="Entrez le libellé du module" class="form-control" value="<?Php echo $ligne[1]?>">
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Durée</label>
                    <input type="text" name="Duree" required placeholder="Entrez la Durée du module" class="form-control" value="<?Php echo $ligne[2]?>">
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Coefficient</label>
                    <input type="number" name="Coeficient" required placeholder="Entrez le coefficient du module" class="form-control" value="<?Php echo $ligne[3]?>">
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Classe</label>
                    <input type="number" name="Id_Salle" readonly="readonly" placeholder="Entrez le libellé de la classe" class="form-control" value="<?Php echo $ligne[4]?>">
                </div>
                <button type="submit" name="modif" class="btn btn-warning">Modifier</button>
                <button type="reset" name="annuler" class="btn btn-danger">Annuler</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>