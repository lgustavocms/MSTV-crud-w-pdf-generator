<?php
	include ('pdf/mpdf.php');
	$nome_contratante = $_POST['nome_contratante'];
	$rg_cpf = $_POST['rg_cpf'];
	$endereco_contratante = $_POST['endereco_contratante'];
	$descricao_servico = $_POST['descricao_servico'];
	$valor_servico = $_POST['valor_servico'];
	$page = "
	<html>
		<body>
		  <h1>CONTRATO DE PRESTAÇÃO DE SERVIÇOS</h1>
		  <br>
		  IDENTIFICAÇÃO DAS PARTES CONTRATANTES
		  <br>		  <br>

       
       
        CONTRATANTE: $nome_contratante, (Nacionalidade), (Estado Civil), (Profissão), Carteira de Identidade nº e C.P.F. nº, respectivamente: $rg_cpf, residente e domiciliado na $endereco_contratante;1
       		  <br><br>
        CONTRATADO: (Nome do Contratado), (Nacionalidade), (Estado Civil), (Profissão), Carteira de Identidade nº (xxx), C.P.F. nº (xxx), residente e domiciliado na Rua (xxx), nº (xxx), bairro (xxx), Cep (xxx), Cidade (xxx), no Estado (xxx);2
		  <br><br> 
        As partes acima identificadas têm, entre si, justo e acertado o presente Contrato de Prestação de Serviços, que se regerá pelas cláusulas seguintes e pelas condições de preço, forma e termo de pagamento descritas no presente.
       		  <br>		  <br>
       

DO OBJETO DO CONTRATO

		  <br>		  <br>
       
       
        Cláusula 1ª. É objeto do presente contrato a prestação do serviço de $descricao_servico.
       
       
       		  <br>		  <br>

OBRIGAÇÕES DO CONTRATANTE

		  <br>		  <br>
       
       
        Cláusula 2ª. O CONTRATANTE deverá fornecer ao CONTRATADO todas as informações necessárias à realização do serviço, devendo especificar os detalhes necessários à perfeita consecução do mesmo, e a forma de como ele deve ser entregue.		  <br><br>
       
        Cláusula 3ª. O CONTRATANTE deverá efetuar o pagamento na forma e condições estabelecidas na cláusula 6ª.
       
       
       		  <br>		  <br>

OBRIGAÇÕES DO CONTRATADO

		  <br>		  <br>
       
       
        Cláusula 4ª. É dever do CONTRATADO oferecer ao contratante a cópia do presente instrumento, contendo todas as especificidades da prestação de serviço contratada.		  <br><br>
       
        Cláusula 5ª. O CONTRATADO deverá fornecer Nota Fiscal de Serviços, referente ao(s) pagamento(s) efetuado(s) pelo CONTRATANTE.
       
       		  <br>		  <br>
       

DO PREÇO E DAS CONDIÇÕES DE PAGAMENTO

		  <br>		  <br>
       
       
        Cláusula 6ª. O presente serviço será remunerado pela quantia de R$ $valor_servico, referente aos serviços efetivamente prestados, devendo ser pago em dinheiro ou cheque, ou outra forma de pagamento em que ocorra a prévia concordância de ambas as partes.3
       
       
       		  <br>		  <br>

DO INADIMPLEMENTO, DO DESCUMPRIMENTO E DA MULTA


       		  <br>		  <br>
       
        Cláusula 7ª. Em caso de inadimplemento por parte do CONTRATANTE quanto ao pagamento do serviço prestado, deverá incidir sobre o valor do presente instrumento, multa pecuniária de 2%, juros de mora de 1% ao mês e correção monetária.		  <br><br>
       
        Parágrafo único. Em caso de cobrança judicial, devem ser acrescidas custas processuais e 20% de honorários advocatícios.		  <br><br>
       
        Cláusula 8ª. No caso de não haver o cumprimento de qualquer uma das cláusulas, exceto a 6ª, do presente instrumento, a parte que não cumpriu deverá pagar uma multa de 10% do valor do contrato para a outra parte.		  <br>
       
       
       		  <br>

DA RESCISÃO IMOTIVADA

		  <br>		  <br>
       
       
        Cláusula 9ª. Poderá o presente instrumento ser rescindido por qualquer uma das partes, em qualquer momento, sem que haja qualquer tipo de motivo relevante, não obstante a outra parte deverá ser avisada previamente por escrito, no prazo de (xxx) dias.4
       		  <br><br>
        Cláusula 10ª. Caso o CONTRATANTE já tenha realizado o pagamento pelo serviço, e mesmo assim, requisite a rescisão imotivada do presente contrato, terá o valor da quantia paga devolvido, deduzindo-se 2% de taxas administrativas.
       		  <br><br>
        Cláusula 11ª. Caso seja o CONTRATADO quem requeira a rescisão imotivada, deverá devolver a quantia que se refere aos serviços por ele não prestados ao CONTRATANTE, acrescentado de 2% de taxas administrativas.
       
       
       		  <br>		  <br>

DO PRAZO


       		  <br>		  <br>
       
        Cláusula 12ª. O CONTRATADO assume o compromisso de realizar o serviço dentro do prazo de (xxx) meses5, de acordo com a forma estabelecida no presente contrato.
       
       
       		  <br>		  <br>

DAS CONDIÇÕES GERAIS


       
       		  <br>		  <br>
        Cláusula 13ª. Fica compactuado entre as partes a total inexistência de vínculo trabalhista entre as partes contratantes, excluindo as obrigações previdenciárias e os encargos sociais, não havendo entre CONTRATADO e CONTRATANTE qualquer tipo de relação de subordinação.
       		  <br><br>
        Cláusula 14ª. Salvo com a expressa autorização do CONTRATANTE, não pode o CONTRATADO transferir ou subcontratar os serviços previstos neste instrumento, sob o risco de ocorrer a rescisão imediata.
       		  <br><br>
        Cláusula 15ª. Este contrato deverá ser registrado no Cartório de Registro de Títulos e Documentos.
       
       		  <br>		  <br>

DO FORO


       		  <br>		  <br>
        Cláusula 16ª. Para dirimir quaisquer controvérsias oriundas do presente contrato, as partes elegem o foro da comarca de (xxx);
       		  <br><br>
        Por estarem assim justos e contratados, firmam o presente instrumento, em duas vias de igual teor, juntamente com 2(duas) testemunhas.
             		  <br>		  <br>
              
        (Local, data e ano).
       		  <br>		  <br>
       
        (Nome e assinatura do Contratante)		 		  <br> <br>
       
        (Nome e assinatura do Contratado)				  <br>  <br>
              
        (Nome, RG e assinatura da Testemunha 1)				  <br>  <br>
       
        (Nome, RG e assinatura da Testemunha 2)				  <br>  <br>
       
 
		</body>
	</html>";
	$arquivo = "contrato.pdf";
	$mpdf = new mPDF();
	$mpdf ->WriteHTML($page);
	$mpdf ->Output($arquivo, 'I')
?>