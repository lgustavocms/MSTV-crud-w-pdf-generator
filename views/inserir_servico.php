<h1>Inserir novo serviço</h1>


<form method="post" action="processa_servico.php">
	<br>
	<p class="badge badge-secondary">Selecione o equipamento</p>
	<select class="form-control" name="escolha_equipamento">
		<option>Selecione um equipamento</option>
		<?php 
		while($linha = mysqli_fetch_array($consulta_equipamentos)){
			echo '<option value="'.$linha['id_equipamento'].'">'.$linha['nome_equipamento'].'</option>';
		}
		?>
	</select>

	<br><br>

	<p class="badge badge-secondary">Selecione o evento</p>
	<select class="form-control" name="escolha_evento">
		<option>Selecione um evento</option>
		<?php 
		while($linha = mysqli_fetch_array($consulta_eventos)){
			echo '<option value="'.$linha['id_evento'].'">'.$linha['nome_evento'].'</option>';
		}
		?>
	</select>
	<br><br>
	<input class="btn btn-success" type="submit" value="Inserir serviço">
</form>