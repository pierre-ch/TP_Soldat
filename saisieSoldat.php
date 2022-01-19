<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styleSoldat.css" type="text/css" />
        <link rel="stylesheet" href="bootstrap-4.6.1-dist/css/bootstrap.min.css" type="text/css" />
        <title>
            Soldat
        </title>
    </head>
    <header align=center>
        <h1>Indemnité des Soldats</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="saisieNombreSoldat.php">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Saisie</li>
            </ol>
        </nav>
    </header>
    <body>
        <div class="container-sm">
            <form action=calculIndemnite.php method=GET>
                <table class="table table-striped" border=3 align=center>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom Soldat</th>
                            <th scope="col">Jour en Mer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $leNombreDeSoldat = $_GET['nbrSoldat'];
                        $numeroTableSoldat = 1;
                        for ($i = 0; $i < $leNombreDeSoldat; $i++) {
                            echo '<tr>
                                <th scope="row">' . $numeroTableSoldat . '</th>
                                <td><input type=text name=nomSoldat' . $i . ' required></td>
                                <td><input type=number name=nbrJour' . $i . ' min=1 required></td>
                                </tr>';
                            $numeroTableSoldat++;
                        };
                        echo '<input type=hidden name=nombreSoldat value=' . $leNombreDeSoldat . '>';
                        ?>
                    </tbody>
                </table>
                <center>
                    <button type=submit class="btn btn-success" name="Valider">Valider</button>
            </form>
            </div>
    </body>

</html>