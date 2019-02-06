<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../bootstrap-4.2.1-dist/css/bootstrap.min.css">

    <script src="../jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="../bootstrap-4.2.1-dist/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
    <h1>DBLOCK</h1>
    <p>Formulaire de connexion</p>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-4">

        </div>
        <div class="col-sm-4 jumbotron text-center alert-dark">
            <form action="verification.php" method="GET">
                <h1>Formulaire</h1><br>

                <input type="text" placeholder="Nom d'utilisateur" name="username" required><br><br><!-- le required permet d'être obligé de rentrer une donnée-->

                <input type="password" placeholder="Mot de passe" name="password" required><br><br>

                <input type="submit" id='submit' value='Connexion'>
        </div>
        <div class="col-sm-4">
        </div>
    </div>
</div>

</body>
</html>
