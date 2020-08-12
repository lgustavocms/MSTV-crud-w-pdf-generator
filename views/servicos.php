<a class="btn btn-success" href="?pagina=inserir_servico">Inserir novo serviço</a>

<table class="table table-hover table-striped" id="matriculas">
	<thead>
		<tr>
			<th>Nome evento</th>
			<th>Data</th>
			<th>Nome equipamento</th>
			<th>Quantidade equipamento</th>
			<th>Processadoras</th>
			<th>Deletar</th>
		</tr>
	</thead>
	<tbody>

		<?php 
			while($linha = mysqli_fetch_array($consulta_servico)){
				echo '<tr><td >'.$linha['nome_evento'].'</td>';
				echo '<td>'.$linha['data_evento'].'</td>';
				echo '<td>'.$linha['nome_equipamento'].'</td>';
				echo '<td>'.$linha['tamanho'].'</td>';
				echo '<td>'.$linha['qntd_processadora'].'</td>';
		?>
			<td>
				<a href="deleta_servico.php?id_servico=<?php echo $linha['id_servico']; ?>">
					<span style="color: Tomato;">
						<i class="fas fa-trash-alt"></i>
					</span>	
				</a>
			</td></tr>
		<?php		
			}

		?>
	</tbody>
</table>