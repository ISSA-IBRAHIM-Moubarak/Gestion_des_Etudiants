<!DOCTYPE html>
<html lang='fr'>
<head>
<meta charset='utf-8'>
<title>Ajout Module</title>
<link rel="stylesheet" type="text/css" href="./Style/bootstrap-cerulean.min.css">
<link rel="stylesheet" type="text/css" href="./Style/style.css">
</head>
<body>
    <div class="container col-md-6 col-md-offset-3 spacer">
        <div class="panel panel-info">
            <div class="panel-heading">Formulaire d'Ajout Module</div>
            <div class="panel-boby">
                <form action="Controller/moduleController.php" method="POST">
                <div class="form-group">
                    <label for="" class="control-label">Libellé</label>
                    <input type="text" name="Libelle_Module" required placeholder="Entrez le libellé du module" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Durée</label>
                    <input type="text" name="Duree" required placeholder="Entrez la durée" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Coefficient</label>
                    <input type="number" name="Coefficient" required placeholder="Entrez le coefficient" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Salle</label>
                    <select name="Id_Salle" class="form=control">
                        <option value="">Faites votre choix...</option>
                        <?php
                            require_once 'Model/db.php';
                            require_once 'Model/salle.php';
                            $liss = listeSalle();
                            while ($ligne = mysqli_fetch_row($liss))
                            {
                                echo "<option value='$ligne[0]'>Libellé-Salle : $ligne[1]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Type-Salle : $ligne[2]</option>";
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