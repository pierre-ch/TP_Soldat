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
        <h1>Saisie d'informations</h1>
    <br>
    </header>
    <body>
        <?php
            $nbrSoldat = $_GET['nombreSoldat'];
            echo '<form action=calculIndeminite.php method=GET align=center>';
                echo '<table border=1 align=center>';
                    echo '<tr>';
                        echo '<th> Nom du soldat </th>';
                        echo '<th> Jours en mer </th>';
                    echo '</tr>';  
                    for ($z=0; $z<$nbrSoldat; $z++)
                    {
                        echo '<tr>';
                        for ($i=0; $i<1; $i++) 
                        {
                            echo '<td> <input type=text name=nomSoldat'.$nbrSoldat.' min=1 required></input> </td>';
                            echo '<td> <input type=number name=jourSoldat'.$nbrSoldat.' min=1 required></input> </td>';
                        }
                        echo '</tr>'; 
                    }
                    echo '</tr>';
                echo '</table>';
                echo '<br>';
                echo '<input class="btn btn-light" type="button" value="Retour" onclick="history.back()">';
                echo '<input class="btn btn-primary" type="submit" value="Valider">';
            echo '</form>';
        ?>
    </body>
</html>