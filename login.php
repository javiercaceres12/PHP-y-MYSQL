<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JC</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

</head>
<body>
            
              <div class="container mt-5">
                <form class="form" action="" method="POST">

                <h1 class="titulo mt-4">Bienvenidos</h2>
                <?php
                include('model/conexion_db.php');
                include('controller/controller_registrar_usuario.php')
                ?>
                <div class="padre">
                    <div class="nombre">
                        <label class="label mt-3" for="">Nombre</label> <br>
                        <input class="name text-center" type="text" name="Nombre"> <br>
                    </div>
                    <div class="apellido">
                        <label class="label mt-3" for="">Apellido</label> <br>
                        <input class="last_name text-center" type="text" name="Apellido"> <br>
                    </div>
                    <div class="usuario">
                        <label class="label mt-3" for="">Usuario</label> <br>
                        <input class="user text-center" type="text" name="Usuario"> <br>
                    </div>
                    <div class="contraseña">
                        <label class="label mt-3" for="">Contraseña</label> <br>
                        <input class="password text-center" type="password" name="Contraseña"> <br>
                    </div>
                    <div class="btn">
                        <input class="btn-submit mt-3" type="submit" value="Registrar" name="enter">
                    </div>

                </div>

                </form>
              </div>
            
        
    
</body>
</html>