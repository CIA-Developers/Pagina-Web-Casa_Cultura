<?php
	$bd_host = "127.0.0.1";
	$bd_user = "root";
	$bd_pass = "";
	$bd_name = "casa_cultura";
	$conexion = mysqli_connect($bd_host,$bd_user,$bd_pass,$bd_name,3306);

	$no=$_GET['no'];

	$sentencia="DELETE FROM mensajes WHERE ID=$no";
	mysqli_query($conexion,$sentencia) or die (mysql_error());
	
?>
<script type="text/javascript">
	alert("Producto Eliminado exitosamente");
	window.location.href='ver_mensajes.php';
</script>