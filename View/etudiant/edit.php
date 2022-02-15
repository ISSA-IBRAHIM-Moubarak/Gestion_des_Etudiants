<!DOCTYPE html>
<html lang='fr'>
<head>
<meta charset='utf-8'>
<title>Mise à jour Etudiant</title>
<link rel="stylesheet" type="text/css" href="./Style/bootstrap-cerulean.min.css">
<link rel="stylesheet" type="text/css" href="./Style/style.css">
</head>
<body>
    <div class="container spacer">
        <div class="panel panel-info">
            <div class="panel-heading">Formulaire d'Edition Etudiant</div>
            <div class="panel-boby">
                <form action="Controller/etudiantController.php" method="POST">
                <div class="form-group">
                    <label for="" class="control-label">Matricule</label>
                    <input type="text" name="Matricule" placeholder="Entrez le Matricule" class="form-control" value="<?Php echo $ligne[0]?>">
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Nom</label>
                    <input type="text" name="Nom" placeholder="Entrez le Nom" class="form-control" value="<?Php echo $ligne[1]?>">
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Prénom</label>
                    <input type="text" name="Prenom" placeholder="Entrez le Prénom" class="form-control" value="<?Php echo $ligne[2]?>">
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Genre</label>
                    <input type="text" name="Genre" placeholder="Entrez le Genre" class="form-control" value="<?Php echo $ligne[3]?>">
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Nationalité</label>
                    <input type="text" name="Nationalite" placeholder="Entrez la Nationalité" class="form-control" value="<?Php echo $ligne[4]?>">
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Date de Naissance</label>
                    <input type="date" name="Date_Naissance" placeholder="Entrez la Date de Naissance" class="form-control" value="<?Php echo $ligne[5]?>">
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Lieu de Naissance</label>
                    <input type="text" name="Lieu_Naissance" required placeholder="Entrez le Lieu de Naissance" class="form-control" value="<?Php echo $ligne[6]?>">
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Telephone</label>
                    <input type="tel" name="Telephone" required placeholder="Entrez le Telephone" class="form-control" value="<?Php echo $ligne[7]?>">
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Email</label>
                    <input type="email" name="email" required placeholder="Entrez le Email" class="form-control" value="<?Php echo $ligne[8]?>">
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Adresse</label>
                    <input type="text" name="Adresse" required placeholder="Entrez l'Adresse" class="form-control" value="<?Php echo $ligne[9]?>">
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Filiere</label>
                    <input type="number" name="Id_Filiere" required class="form-control" value="<?Php echo $ligne[10]?>">
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Niveau</label>
                    <input type="number" name="Id_Niveau" required class="form-control" value="<?Php echo $ligne[11]?>">
                </div>
                <button type="submit" name="modif" class="btn btn-warning">Modifier</button>
                <button type="reset" name="annuler" class="btn btn-danger">Annuler</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>