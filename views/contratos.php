
	<h1>Gerar contratos</h1>
<br>
<h2> Dados do contratante </h2>

<form method="post" action="processa_contrato.php">
	<br>
	<label class="badge badge-secondary">Nome do contratante:</label><br>
	<input class= "form-control" type="text" name="nome_contratante" placeholder="Insira o nome do contratante"><br><br>
	<label class="badge badge-secondary">RG e CPF:</label><br>
	<input class= "form-control" type="text" name="rg_cpf" placeholder="Insira o rg e cpf do contratante"><br><br>
	<label class="badge badge-secondary">Endereço do contratante:</label><br>
	<input class= "form-control" type="text" name="endereco_contratante" placeholder="rua, num, bairro, cep, cidade, estado e país"><br><br>

<h2>Do objeto do contrato</h2>
	<br>
	<label class="badge badge-secondary">Descrição do serviço:</label><br>
	<input class= "form-control" type="text" name="descricao_servico" placeholder="Insira a descrição do serviço com detalhes"><br><br>

<h2>Do preço e das condições de pagamento</h2>
	<br>
	<label class="badge badge-secondary">Valor do serviço:</label><br>
	<input class= "form-control" type="text" name="valor_servico" placeholder="Insira o valor do serviço (R$ 00,00)"><br><br>

	
	<input type="submit" class="btn btn-success" value="gerar pdf">
</form>
