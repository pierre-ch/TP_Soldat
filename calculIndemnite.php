<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styleSoldat.css" type="text/css" />
    <link rel="stylesheet" href="bootstrap-4.6.1-dist/css/bootstrap.min.css" type="text/css" />
    <link rel="shortcut icon" type="image/png" href="favicon-32x32.png"/>
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
                <li class="breadcrumb-item"><a href="javascript:history.go(-2)">Accueil</a></li>
                <li class="breadcrumb-item"><a href="javascript:history.go(-1)">Saisie</a></li>
                <li class="breadcrumb-item active" aria-current="page">Résultat indémnité</li>
            </ol>
        </nav>
    </div>
</header>

<body>
    <?php
    include('mesFonction.php');
    $nombre = $_GET['nombreSoldat'];
    $tabJour = array();
    $tabName = array();
    $tabDay = array();
    ?>

    <div class="container-sm">
        <table class="table table-striped" align=center>
            <thead style="position: sticky;top: 0" class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom du soldat</th>
                    <th scope="col">🌊 Jours en mer</th>
                    <th scope="col">💶 Indemnité</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $numeroTableSoldat = 1;
                for ($i = 0; $i < $nombre; $i++) {
                    $tabName[$i] = $_GET['nomSoldat' . $i];
                    $tabDay[$i] = $_GET['nbrJour' . $i];
                    $total = calculIndemnite($tabDay[$i]);
                    echo '<tr>
                            <th scope="row">' . $numeroTableSoldat . '</th>
                                <td>' . $tabName[$i] . '</td>
                                <td>'. $tabDay[$i] . '</td>
                                <td>' . $total . ' €</td>
                        </tr>';                   
                    $numeroTableSoldat++;
                };
                ?>
            </tbody>
        </table>
    </div>
</body>

<footer class="text-center text-lg-start bg-light fixed-bottom text-muted">
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.01);">
        Copyright © <?php echo date("Y"); ?> <i>Lycée Carcouët</i>
    </div>
</footer>

</html>