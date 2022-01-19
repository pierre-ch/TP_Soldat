<DOCTYPE html>
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
                <li class="breadcrumb-item"><a href="javascript:history.go(-2)">Accueil</a></li>
                <li class="breadcrumb-item"><a href="javascript:history.go(-1)">Saisie</a></li>
                <li class="breadcrumb-item active" aria-current="page">Calcul</li>
            </ol>   
        </nav>
    </header>
    <body>
            <?php
            include('mesFonction.php');
                $nombre = $_GET['nombreSoldat'];
                $tabName = array();
                $tabDay = array();
            ?>

            <div class="container-sm">
                <table class="table table-striped" border=3 align=center>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom Soldat</th>
                            <th scope="col">Indemnité</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $numeroTableSoldat = 1;
                            for ($i = 0; $i < $nombre; $i++) 
                            {
                                $tabName[$i] = $_GET['nomSoldat'.$i];
                                $tabDay[$i] = $_GET['nbrJour'.$i];
                                $total = calculIndemnite($tabName[$i], $tabDay[$i]);
                                echo '<tr>
                                    <th scope="row">' . $numeroTableSoldat . '</th>
                                    <td>' . $tabName[$i] . '</td>
                                    <td>' . $total . '</td>
                                    </tr>';
                                $numeroTableSoldat++;
                            };
                        ?>
                    </tbody>
                </table>
            </div>
    </body>

</html>