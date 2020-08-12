<?php if(!isset($_GET['editar'])){ ?>

	<h1>Inserir novo evento</h1>

	<form method="post" action="processa_evento.php">
		<br>
		<label class="badge badge-secondary">Nome evento:</label><br>
		<input class="form-control" type="text" name="nome_evento" placeholder="Insira o nome do evento"><br><br>
		<label class="badge badge-secondary">Data evento</label><br>
		<input class="form-control" type="text" name="data_evento" placeholder="Insira a data (AAAA-MM-DD)"><br><br>
		<input type="submit" class="btn btn-success" value="Inserir evento">
	</form>



<?php } else { ?>
	<?php while($linha = mysqli_fetch_array($consulta_eventos)){ ?>
		<?php if($linha['id_evento'] == $_GET['editar']){ ?>
			<h1>Editar evento</h1>
				<form method="post" action="edita_evento.php">
					<input type="hidden" name="id_evento" value="<?php echo $linha['id_evento']; ?>">
					<br>
					<label class="badge badge-secondary">Nome evento:</label><br>
					<input class="form-control" type="text" name="nome_evento" placeholder="Insira o nome do evento" value="<?php echo $linha['nome_evento']; ?>">
					<br><br>
					<label class="badge badge-secondary">Data evento:</label><br>
					<input class="form-control"  type="text" name="data_evento" placeholder="Insira a data (AAAA-MM-DD)" value="<?php echo $linha['data_evento']; ?>"><br><br>
					<input class="btn btn-success" type="submit" value="Editar evento">
				</form>
			<?php } ?>
	<?php } ?>
<?php } ?>


