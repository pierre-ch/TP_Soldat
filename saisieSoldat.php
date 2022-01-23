<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styleSoldat.css" type="text/css" />
    <link rel="stylesheet" href="bootstrap-4.6.1-dist/css/bootstrap.min.css" type="text/css" />
    <link rel="shortcut icon" type="image/png" href="favicon-32x32.png" />
    <title>
        Soldat
    </title>
</head>

<header align=center>
    <div class="container-sm">
        <br>
        <h1>Indemnité des Soldats</h1>
        </br>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="saisieNombreSoldat.php">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Saisie</li>
            </ol>
        </nav>
        <div class="container-sm">
</header>

<body>
    <div class="container-sm">
        <form action=calculIndemnite.php method=GET>
            <table class="table table-striped" align=center>
                <thead style="position: sticky;top: 0" class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom du soldat</th>
                        <th scope="col">🌊 Jours en mer</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $leNombreDeSoldat = $_GET['nbrSoldat'];
                    $numeroTableSoldat = 1;
                    for ($i = 0; $i < $leNombreDeSoldat; $i++) {
                        echo '<tr>
                                <th scope="row">' . $numeroTableSoldat . '</th>
                                <td><input type=text name=nomSoldat' . $i . ' placeholder="Prénom Nom" required></td>
                                <td><input type=number name=nbrJour' . $i . ' min=1 required></td>
                                </tr>';
                        $numeroTableSoldat++;
                    };
                    echo '<input type=hidden name=nombreSoldat value=' . $leNombreDeSoldat . '>';
                    ?>
                </tbody>
            </table>
            <br>
            <div align=center>
                <input class="btn btn-light" type="button" value="Retour" onclick="history.back()">
                <input class="btn btn-danger" type="reset" value="Effacer"><i class="bi bi-x-lg"></i></input>
                <button type="submit" class="btn btn-success">Valider</button>
            </div>
        </form>
    </div>
</body>
<br>
<footer class="text-center text-lg-start bg-light fixed-bottom text-muted">
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0);">
        Copyright © <?php echo date("Y"); ?> <i>Lycée Carcouët</i>
    </div>
</footer>

</html>