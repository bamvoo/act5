<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../public/css/style.css">
    </head>
    <body class="bodyDefault">
        <div class="nav bg-dark">
            <div class="name"><a href="/">NewHomePlus</a></div>
            <div class="login">
                <a href="/login">Login</a>
            </div>
            <div class="register">
                <a href="/register">Registro</a>
            </div>
        </div>
        <div id="body_def">
            <h4  class=" alert alert-dark" ><?= $title; if(isset($_SESSION["user"])){echo' usuario '.$_SESSION["user"].'!';} ?></h4>
            <?php

                session_start();

                if (isset($_SESSION['user'])){
                    echo "        
                        <a href='/propertie' class='btn_np btn btn-outline-dark'>Crear propiedad</a>
                        ";
                }
                foreach ($propiedades as $propiedad){
                    echo '
                          <div style="width: 15vw; margin-top: 5vh">  
                              <div>'. $propiedad["direccion"] .'</div>
                              <div>'. $propiedad["poblacion"] .'</div> 
                              <div>'. $propiedad["precio"] .'</div>
                              <div>'. $propiedad["tipo"] .'</div>  
                              <hr>
                          </div>  
                    ';
                }
            ?>
        </div>
    </body>
</html>