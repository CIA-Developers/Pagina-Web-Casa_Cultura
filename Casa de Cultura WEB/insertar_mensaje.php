<!Doctype html>
<html>
    <head>
    <title>Insertar registros PHP con MySQL</title>
    </head>
    <body>
        <?php
            $bd_host = "127.0.0.1";
            $bd_user = "root";
            $bd_pass = "";
            $bd_name = "casa_cultura";

            $nombre=htmlspecialchars($_POST["name"]);
            $correo_electronico=htmlspecialchars($_POST["email"]);
            $asunto=htmlspecialchars($_POST["subject"]);
            $mensaje=htmlspecialchars($_POST["message"]);
           

            $conectar= mysqli_connect($bd_host,$bd_user,$bd_pass,$bd_name,3306);

            if(mysqli_connect_errno())
            {

                printf("ERROR: %U - %S",mysqli_connect_errno(),mysqli_connect_error());
                exit();
            }

            mysqli_set_charset($conectar,"utf8");
            $insertar = "insert into mensajes(nombre,correo_electronico,asunto,mensaje)
            values('$nombre','$correo_electronico','$asunto','$mensaje')";

            if ($resultado = mysqli_query($conectar,$insertar))
            {
                header("location:send.html");
            }
            else
            {
                header("location:error.html");
            }
            Mysqli_close($conectar);
        ?>
    </body>
    </html>