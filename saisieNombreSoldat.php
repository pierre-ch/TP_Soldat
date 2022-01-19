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
            </ol>
        </nav>
    </header>
    <body>
        <table border=1 align=center>
            <tr>
                <td>
                    Combien de soldats sont à indemniser ?
                </td>
                <td>
                    <form action=saisieSoldat.php method=GET>
                        <input type=number name=nbrSoldat min=1 required>
                        <input type=submit>
                    </form>
                </td>
            </tr>
        </table>
    </body>
</html>