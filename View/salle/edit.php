<!DOCTYPE html>
<html lang='fr'>
<head>
<meta charset='utf-8'>
<title>Mise à jour Salle</title>
<link rel="stylesheet" type="text/css" href="./Style/bootstrap-cerulean.min.css">
<link rel="stylesheet" type="text/css" href="./Style/style.css">
</head>
<body>
    <div class="container col-md-6 col-md-offset-3 spacer">
        <div class="panel panel-info">
            <div class="panel-heading">Formulaire d'Edition Salle</div>
            <div class="panel-boby">
                <form action="Controller/salleController.php" method="POST">
                <div class="form-group">
                    <label for="" class="control-label">N° Salle</label>
                    <input type="text" name="Id_Salle" placeholder="Entrez le libelle de la Salle" class="form-control" readonly="readonly" value="<?Php echo $ligne[0]?>">
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Libellé</label>
                    <input type="text" name="Libelle_Salle" required placeholder="Entrez le libellé de la Salle" class="form-control" value="<?Php echo $ligne[1]?>">
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Type</label>
                    <input type="text" name="Type_Salle" required placeholder="Entrez le type de la Salle" class="form-control" value="<?Php echo $ligne[2]?>">
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Capacité</label>
                    <input type="text" name="Capacite" required placeholder="Entrez la capacité de la Salle" class="form-control" value="<?Php echo $ligne[3]?>">
                </div>
                <button type="submit" name="modif" class="btn btn-warning">Modifier</button>
                <button type="reset" name="annuler" class="btn btn-danger">Annuler</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>