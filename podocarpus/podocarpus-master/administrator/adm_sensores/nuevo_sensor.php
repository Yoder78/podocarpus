<?php
	extract($_POST);
	include('../adm_header.php');


	$miconexion->consulta("INSERT INTO `sensores` (`id_sensores`, `nombre`, `latitud`, `longitud`, `Descripcion`,`tipo_dato`)
	VALUES (NULL,'$nombre', '$latitud', '$longitud', '$Descripcion','$tipo_dato')");
	
	




	echo "<script>location.href='index.php'</script>";
?>
