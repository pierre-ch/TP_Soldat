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
                <li class="breadcrumb-item active">Accueil</a></li>
            </ol>
        </nav>
    </div>
</header>

<body>
    <div class="container-sm" align=center>
        <br>
        <h5>Combien de soldats sont à indemniser ?</h5>
        <br>
        <form action=saisieSoldat.php method=GET>
            <input type=number name=nbrSoldat min=1 required>
            <br><br>
            <button type="submit" class="btn btn-primary">Continuer</button>
        </form>
    </div>
</body>

</html>