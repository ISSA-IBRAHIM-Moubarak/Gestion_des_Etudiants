<!DOCTYPE html>
<html lang='fr'>
<head>
<meta charset='utf-8'>
<title>Ajout Etudiant</title>
<link rel="stylesheet" type="text/css" href="./Style/bootstrap-cerulean.min.css">
<link rel="stylesheet" type="text/css" href="./Style/style.css">
</head>
<body>
    <div class="container col-md-6 col-md-offset-3 spacer">
        <div class="panel panel-info">
            <div class="panel-heading">Formulaire d'Ajout Etudiant</div>
            <div class="panel-boby">
                <form action="Controller/etudiantController.php" method="POST">
                <div class="form-group">
                    <label for="" class="control-label">Matricule</label>
                    <input type="text" name="Matricule" required placeholder="Entrez le matricule" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Nom</label>
                    <input type="text" name="Nom" required placeholder="Entrez le Nom" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Prénom</label>
                    <input type="text" name="Prenom" required placeholder="Entrez le Prénom" class="form-control">
                </div>
                <div class="form-group">
                <label for="" class="control-label">Genre :  &nbsp; &nbsp; &nbsp;</label><input type="radio" name="Genre" value="Homme">Homme &nbsp;<input type="radio" name="Genre" value="Femme">Femme</p>
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Nationalité</label>
                    <input type="text" name="Nationalite" required placeholder="Entrez la Nationalité" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Date_Naissance</label>
                    <input type="date" name="Date_Naissance" required placeholder="Entrez la Date de Naissance" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Lieu_Naissance</label>
                    <input type="text" name="Lieu_Naissance" required placeholder="Entrez le Lieu de Naissance" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Téléphone</label>
                    <input type="tel" name="Telephone" required placeholder="Entrez le Téléphone" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Email</label>
                    <input type="email" name="email" required placeholder="Entrez le Email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Adresse</label>
                    <input type="text" name="Adresse" required placeholder="Entrez l'Adresse" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="control-label">FILIERE</label>
                    <select name="Id_Filiere" class="form=control">
                        <option value="">Faites votre choix...</option>
                        <?php
                            require_once 'Model/db.php';
                            require_once 'Model/filiere.php';
                            $lisf = listeFiliere();
                            while ($ligne = mysqli_fetch_row($lisf))
                            {
                                echo "<option value='$ligne[0]'>Libellé-Filiere : $ligne[1]</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="" class="control-label">NIVEAU</label>
                    <select name="Id_Niveau" class="form=control">
                        <option value="">Faites votre choix...</option>
                        <?php
                            require_once 'Model/db.php';
                            require_once 'Model/niveau.php';
                            $lisn = listeNiveau();
                            while ($ligne = mysqli_fetch_row($lisn))
                            {
                                echo "<option value='$ligne[0]'>Libellé-Niveau : $ligne[1]</option>";
                            }
                        ?>
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