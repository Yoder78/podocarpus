<?php
	extract($_POST);
	include('../adm_header.php');

	$miconexion->consulta("UPDATE sensores SET nombre = '$nombre', latitud = $latitud, longitud = $longitud, Descripcion = '$Descripcion'
	WHERE id_sensores = $id");



	// $miconexion->consulta("UPDATE fotos SET url = '$url'
							// WHERE idFotos = $id_f");


	echo "<script>location.href=index.php</script>";

?>
