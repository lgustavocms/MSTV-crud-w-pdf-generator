<?php if(!isset($_GET['editar'])){ ?>

	<h1>Inserir novo equipamento</h1>

<form method="post" action="processa_equipamento.php">
	<br>
	<label class="badge badge-secondary">Nome equipamento:</label><br>
	<input class= "form-control" type="text" name="nome_equipamento" placeholder="Insira o nome do equipamento"><br><br>
	<label class="badge badge-secondary">Tamanho/quantidade do equipamento:</label><br>
	<input class= "form-control" type="text" name="tamanho" placeholder="Insira o nome o tamanho/quantidade"><br><br>
	<label class="badge badge-secondary">Quantidade de processadoras:</label><br>
	<input class= "form-control" type="text" name="qntd_processadora" placeholder="Insira a quantidade de processadoras"><br><br>
	<input type="submit" class="btn btn-success" value="Inserir equipamento">
</form>

<?php } else { ?>
	<?php while($linha = mysqli_fetch_array($consulta_equipamentos)){ ?>
		<?php if($linha['id_equipamento'] == $_GET['editar']){ ?>
			<h1>Editar equipamento</h1>
				<form method="post" action="edita_equipamento.php">
					<input type="hidden" name="id_equipamento" value="<?php echo $linha['id_equipamento']; ?>">
					<br>
					<label class="badge badge-secondary">Nome equipamento:</label><br>
					<input class="form-control" type="text" name="nome_equipamento" placeholder="Insira o nome do equipamento" value="<?php echo $linha['nome_equipamento']; ?>">
					<br><br>
					<label class="badge badge-secondary">Tamanho/quantidade do equipamento:</label><br>
					<input class="form-control"  type="text" name="tamanho" placeholder="Insira o nome o tamanho/quantidade" value="<?php echo $linha['tamanho']; ?>"><br><br>
					<label class="badge badge-secondary">Quantidade de processadoras:</label><br>
					<input class="form-control"  type="text" name="qntd_processadora" placeholder="Insira o nome a quantidade de processadoras" value="<?php echo $linha['qntd_processadora']; ?>"><br><br>
					<input class="btn btn-success" type="submit" value="Editar equipamento">
				</form>
			<?php } ?>
	<?php } ?>
<?php } ?>