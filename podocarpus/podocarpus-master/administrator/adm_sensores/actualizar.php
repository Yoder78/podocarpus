<?php
	extract($_GET);
	include('../adm_header.php');
	$id_lugar = $miconexion->consulta("SELECT * FROM sensores WHERE id_sensores = $id");
	// $id_foto = $miconexion->consultaID("SELECT idFotos FROM fotos WHERE id_sensores = $id_sensores");
	// echo $id_foto;
	$lista_l=$miconexion->consulta_lista();
    $lista_sector[1]="txt";
    $lista_sector[2]="Json";
    $lista_sector[3]="Wifi";

?>
<main>
	<section class="modulo-servicios">
		<nav class="nav_modulo">
			<a href="nuevo.php"><i class="fas fa-user-plus"></i> Nuevo Lugar</a><br>
			<a href="index.php"><i class="fas fa-user-cog"></i> Listar</a>
		</nav>
    </section>
	<section class="area_trabajo">
		<section class="contenido_mod">
			<h2>Actualización de Sensores</h2>
			<!-- Metodo post para guardar formulario -->
			<form method="post" action="update1.php">
				<div class="contenedor-inputs">
					<input type="hidden" name="id_sensores" value="<?php echo $lista_l[0];?>">
					<input type="text" name="nombre" placeholder="Nombre" value="<?php echo $lista_l[1];?>">
					<input type="text" name="latitud" placeholder="Latitud"  value="<?php echo $lista_l[2];?>" required="required">
					<input type="text" name="longitud" placeholder="Longitud"  value="<?php echo $lista_l[3];?>" required="required">
					<input type="text" name="Descripcion" placeholder="Descripción"  value="<?php echo $lista_l[4];?>" required="required">
				
					<select name="tipo_dato">
						<!-- <option value="">Selecciones</option> -->
						

						<option value="1">txt</option>
						<option value="2">Json</option>
						<option value="3">Wifi</option>
					</select>
					<!--<hr>
					<span>Subir Imagen</span>
					<input type="file" name="imagen">-->
				</div>
				<input type="submit" class="btn-submit" value="Guardar">
			</form>
		</section>
	</section>

</main>
<?php
	include('../adm_footer.php');
?>
