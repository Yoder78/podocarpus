<?php
	include('../adm_header.php');
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
			<h2>REGISTRO</h2>
			<hr>
			<h3>Nuevo Lugar</h3>
			<!-- Metodo post para guardar formulario -->
			<form method="post" action="nuevo_lugar.php">
				<div class="contenedor-inputs">
					<input type="text" name="nombre" placeholder="Nombre">
					<input type="text" name="latitud" placeholder="Latitud" required="required">
					<input type="text" name="longitud" placeholder="Longitud" required="required">
					<input type="text" name="descripcion" placeholder="Descripción" required="required">
					<select name="sector">
						<option value="">Seleccione el sector</option>
						<option value="1">Bombuscaro</option>
						<option value="2">Romerillos</option>
						<option value="3">Zona Alta</option>
						<option value="4">Zona Baja</option>
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
