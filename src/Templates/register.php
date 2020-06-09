<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../public/css/style.css">

</head>
    <body class="bodyLogReg">
        <div class="nav bg-dark">
            <div class="name">
                <a href="/">NewHomePlus</a>
            </div>
            <div class="login">
                <a href="/">Inicio</a>
            </div>
            <div class="register">
                <a href="/login">Log In</a>
            </div>
        </div>
        <div class="containerLogReg">
            <div class="centerLogReg">
                <h1 class="title">Regístrate</h1>
                <form action="/register/register" method="post">
                    <label for="usuari">Usuario</label><br><input class="form-control" type="text" name="user_post" id="usuari" placeholder="Nom d'usuari" ><br>
                    <label for="contrasenya">Contraseña</label><br><input class="form-control" type="password" name="passwd_post" id="contrasenya" placeholder="Contrasenya del compte"><br>
                    <br>
                    <input class="btn btn-dark" type="submit" id="connectar" value="Connectar" name="registrar">
                </form>
            </div>
        </div>
    </body>
</html>