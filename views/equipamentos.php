<a class="btn btn-sucess" href="?pagina=inserir_equipamento">Inserir novo equipamento</a>

<table class="table table-hover table-striped" id="equipamentos">
	<thead>
		<tr>
			<th>Nome Equipamento</th>
			<th>Tamanho equipamento</th>
			<th>Quantidade de Processadora</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>
	</thead>
	<tbody>
		<?php
			while ($linha = mysqli_fetch_array($consulta_equipamentos)) {
				echo '<tr><td>'.$linha['nome_equipamento'].'</td>';
				echo '<td>'.$linha['tamanho'].'</td>';
				echo '<td>'.$linha['qntd_processadora'].'</td>';
				?>
				
			<td><a href="?pagina=inserir_equipamento&editar=<?php echo $linha['id_equipamento']; ?>">
				<i class="fas fa-edit"></i>
			</a></td>
			<td><a href="deleta_equipamento.php?id_equipamento=<?php echo $linha['id_equipamento']; ?>"><i class="fas fa-trash-alt"></i></a></td></tr>
		<?php
			}
		?>
	</tbody>	
</table>
