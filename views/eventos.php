<a class="btn btn-sucess" href="?pagina=inserir_evento">Inserir novo evento</a>

<table class="table table-hover table-striped" id="eventos">
	<thead>
		<tr>
			<th>Nome Evento</th>
			<th>Data</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>
	</thead>
	<tbody>
		<?php
			while ($linha = mysqli_fetch_array($consulta_eventos)) {
				echo '<tr><td>'.$linha['nome_evento'].'</td>';
				echo '<td>'.$linha['data_evento'].'</td>';
				?>
				
			<td><a href="?pagina=inserir_evento&editar=<?php echo $linha['id_evento']; ?>">
				<i class="fas fa-edit"></i>
			</a></td>
			<td><a href="deleta_evento.php?id_evento=<?php echo $linha['id_evento']; ?>"><i class="fas fa-trash-alt"></i></a></td></tr>
		<?php
			}
		?>
	</tbody>	
</table>
