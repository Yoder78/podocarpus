<?php
extract($_GET);
include('../adm_header.php');
$miconexion->consulta("delete from sensores where id_sensores=$idr");
echo "<script>location.href='index.php'</script>";
?>
