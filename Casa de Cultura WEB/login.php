<!Doctype html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php
            try
            {
                $conMySQL = new PDO("mysql:host=localhost; port=3306; dbname=casa_cultura","root","");

                $conMySQL->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $sentenciaSQL ="SELECT * FROM administrador WHERE nombre = :nombre AND pass= :pass ";
                $sentenciaPrep = $conMySQL->prepare($sentenciaSQL);
                $log=htmlspecialchars(addslashes($_POST["nombre"]));
                $pas=htmlspecialchars(addslashes($_POST["pass"]));

                $sentenciaPrep->execute(array(":nombre"=>$log,":pass"=>$pas));
                $numRegistros = $sentenciaPrep->rowCount();
                if($numRegistros !=0)
                {
                    session_start();
                    if (!isset($_SESSION["nombre"])){
                        header("location:ver_mensajes.php"); 
                    }
                }
                else
                {
                    header('location:loginAdmin.html');   
                }
            }
            catch(Exception $e)
            {
                die("Error:".$e->getMessage());
            }
            finally{ $conMySQL = null;}
            ?>
    </body>
</html>
