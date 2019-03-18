<!DOCTYPE html>
<html>
<head>
<title>Mensajes Recibidos</title>
<link rel = "icon" type = "image/ico" href = "img/logo_casa_cultura.jpg">
</head>
<body>
<div class="todo">
  <h1>MENSAJES RECIBIDOS <a href="cerrarSesion.php" id="Accion">Cerrar Sesión</a> </h1> <br>
  <div id="contenido">
  	<table class="table table-dark" style="margin: auto; width: 800px; border-spacing: 10px 5px;">
  		<thead>
  			<th>ID</th>
  			<th>Nombre</th>
  			<th>Correo Electronico</th>
        <th>Asunto</th>
        <th>Mensaje</th>
  		</thead>
  		
  		
      <?php
         function cerrar{
              
         }
         $bd_host = "127.0.0.1";
         $bd_user = "root";
         $bd_pass = "";
         $bd_name = "casa_cultura";
        $conexion = mysqli_connect($bd_host,$bd_user,$bd_pass,$bd_name,3306);
        
        $sentencia="SELECT * FROM mensajes";
        $resultado=mysqli_query($conexion,$sentencia);
        while($filas=mysqli_fetch_assoc($resultado))
        {
          echo "<tr>";
            echo "<td>"; echo $filas['ID']; echo "</td>";
            echo "<td>"; echo $filas['nombre']; echo "</td>";
            echo "<td>"; echo $filas['correo_electronico']; echo "</td>";
            echo "<td>"; echo $filas['asunto']; echo "</td>";
            echo "<td>"; echo $filas['mensaje']; echo "</td>";
            echo "<td> <a href='eliminar_prod.php?no=".$filas['ID']."''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";
          echo "</tr>";
        }
      ?>
  	</table>
  </div>
  
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <style>
    body{
      background-image: url(img/fondo.jpg);
    }
    .todo h1{
      text-align: center;
    }
    #cabecera {
      opacity: 1;
      text-align: center;
    }
    #contenido {
      min-height: 401px;
    }
    table{
      color:white;
      background:black;
    }
    #Accion{
      color: red;
      margin-left: 40%;
      
    }
  </style>
</body>
</html>