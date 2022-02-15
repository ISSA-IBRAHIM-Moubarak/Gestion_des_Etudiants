<!DOCTYPE html>
<html lang='fr'>
<head>
<meta charset='utf-8'>
<title>Liste Evaluation</title>
<link rel="stylesheet" type="text/css" href="./Style/bootstrap-cerulean.min.css">
<link rel="stylesheet" type="text/css" href="./Style/style.css">
<script type="text/javascript" src="./Script/script.js"></script>
</head>
<body>
    <div class="container spacer col-md-6 col-md-offset-3">
        <div class="panel panel-info">
            <div  class="panel panel-heading">Liste des Evaluations</div>
            <div  class="panel-body">
                <table class="table table-hover">
                    <tr>
                        <th>N° Evaluation</th>
                        <th>Etudiant</th>
                        <th>Module</th>
                        <th>Note</th>
                        <th>Type</th>
                        <th>Option</th>
                        <th>Action</th>
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
                                            <td><a href='?ok=editeva&Id_Evaluation=$svg[0]'  class='btn btn-primary'>Modifier</a></td>
                                            <td><a href='Controller/evaluationController.php?Id_Evaluation=$svg[0]' class='btn btn-danger' onclick= 'return confirmation();'>Supprimer</a></td>
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