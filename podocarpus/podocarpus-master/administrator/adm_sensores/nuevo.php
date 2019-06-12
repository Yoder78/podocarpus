<?php
	include('../adm_header.php');
?>
<main>
	<section class="modulo-servicios">
		<nav class="nav_modulo">
			<a href="nuevo.php"><i class="fas fa-user-plus"></i> Nuevo Sensor</a><br>
			<a href="index.php"><i class="fas fa-user-cog"></i> Listar</a>
		</nav>
    </section>
    <section class="area_trabajo">
		<section class="contenido_mod">
			<h2>REGISTRO</h2>
			<hr>
			<h3>Nuevo Sensor</h3>
			<!-- Metodo post para guardar formulario -->
			<form method="post" action="nuevo_sensor.php">
				<div class="contenedor-inputs">
					<input type="text" name="nombre" placeholder="Nombre">
					<input type="text" name="latitud" placeholder="Latitud" required="required">
					<input type="text" name="longitud" placeholder="Longitud" required="required">
					<input type="text" name="Descripcion" placeholder="Descripción de sensor"  required="required">
					
					<select name="tipo_dato">
						<option value="">Que dato registrar</option>
						<option value="1">txt</option>
						<option value="2">Json</option>
						<option value="3">Por Wifi</option>

					</select>
					
				</div>
				<input type="submit" class="btn-submit" value="Guardar">
			</form>
		</section>
	</section>


</main>
<?php
	include('../adm_footer.php');
?>
