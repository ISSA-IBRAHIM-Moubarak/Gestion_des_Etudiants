<!DOCTYPE html>
<html lang='fr'>
<head>
<meta charset='utf-8'>
<title>Liste Etudiant</title>
<link rel="stylesheet" type="text/css" href="./Style/bootstrap-cerulean.min.css">
<link rel="stylesheet" type="text/css" href="./Style/style.css">
<script type="text/javascript" src="./Script/script.js"></script>
</head>
<body>
    <div class="container spacer">
        <div class="panel panel-info">
            <div  class="panel panel-heading">Liste des Etudiants</div>
            <div  class="panel-body">
                <table class="table table-hover">
                    <tr>
                        <th>Matricule</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Genre</th>
                        <th>Nationalité</th>
                        <th>Date de Naissance</th>
                        <th>Lieu de Naissance</th>
                        <th>Téléphone</th>
                        <th>Email</th>
                        <th>Adresse</th>
                        <th>Filière</th>
                        <th>Niveau</th>
                        <th>ACTION 1</th>
                        <th>ACTION 2</th>
                    </tr>
                    <tr>
                        <?php
                            while ($svg = mysqli_fetch_row($link))
                                {
                                    echo "<tr>
                                            <td>$svg[0]</td>
                                            <td>$svg[1]</td>
                                            <td>$svg[2]</td>
                                            <td>$svg[3]</td>
                                            <td>$svg[4]</td>
                                            <td>$svg[5]</td>
                                            <td>$svg[6]</td>
                                            <td>$svg[7]</td>
                                            <td>$svg[8]</td>
                                            <td>$svg[9]</td>
                                            <td>$svg[10]</td>
                                            <td>$svg[11]</td>
                                            <td><a href='?page_agent=editeEtudiant&Matricule=$svg[0]'  class='btn btn-primary'>Modifier</a></td>
                                            <td><a href='Controller/etudiantController.php?Matricule=$svg[0]' class='btn btn-danger' onclick= 'return confirmation();'>Supprimer</a></td>
                                        </tr>";
                                }
                        ?>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>