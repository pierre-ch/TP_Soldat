<html>
    <head>
        <title>
            Saisie nombre de Soldats
        </title>
        <meta http-equiv="content-type" content="text/html"; charset="UTF-8"/>
        <link rel=STYLESHEET href="css/bootstrap.min.css" type="text/css">
    </head>
    <header align=center>
    <br>
        <h1>Saisir le nombre de soldats</h1>
    <br>
    </header>
    <body>
        <form action=saisieSoldat.php method=GET align=center>
            <table border=1 align=center>
                <tr>
                    <td>
                        Nombre de soldats
                    </td>
                    <td>
                    <input type=number name=nombreSoldat min=1 required></imput>
                    </td>
                </tr>
            </table>
            <br>
            <input class="btn btn-primary" type="submit" value="Valider">
        </body>
</html>