<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body class="bodyLogReg">
    <div class="nav bg-dark">
        <div class="name"><a>NewHomePlus</a></div>
        <div class="login">
            <a href="/">Inicio</a>
        </div>
        <div class="register">
            <a href="/login">Log In</a>
        </div>
    </div>
    <div class="containerLogReg">
        <div class="centerLogReg">
            <h1 class="title"><?= $title; ?></h1>
            <form action="/propertie/add" method="post">

                Dirección
                <input class="form-control" type="text" name="direc" placeholder="Dirección propiedad">
                <br>

                Precio
                <input class="form-control" type="number" name="precio" placeholder="Precio">
                <br>

                Descripción
                <input class="form-control" type="text" name="desc" id="desc" placeholder="Descripcion">
                <br>

                Metros cuadrados
                <input class="form-control" type="number" name="m2" id="m2" placeholder="M2">
                <br>

                Población
                <input class="form-control" type="text" name="poblac" id="pob" placeholder="Poblacion">
                <br>

                Compra o Alquiler?<br>
                <select class="form-control" name="select_ca">
                    <option value="Comprar">Comprar</option>
                    <option value="Alquiler">Alquiler</option>
                </select>
                <br>

                Propiedad<br>
                <select class="form-control" name="select_p">
                    <option value="Piso">Piso</option>
                    <option value="Casa">Casa</option>
                    <option value="Bungalow">Bungalow</option>
                    <option value="Autocaravana">Autocaravana</option>
                </select>
                <br>

                <input class="btn btn-outline-dark" id="btn_m_extra" type="submit">
            </form>
        </div>
    </div>
</body>

</html>