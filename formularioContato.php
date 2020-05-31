<!-- Importando Páginas do Projeto! -->

<?php include('cabecalho.php');?>
<?php include('menuPaginasIndividuais.php');?>

	
	<style>
			fieldset {
			  background-color: #eeeeee;
			}

			legend {
			  background-color: gray;
			  color: white;
			  padding: 5px 10px;
			}

			input {
			  margin: 5px;
			}
	</style>


	<div class="formularioContato  text-center">
			
			<h1>Fale Conosco!</h1>

			<form action="enviaMsgContato.php" method="POST">
				 	<fieldset align="center">
						  <legend> Todos os campos são de preenchimento obrigatório:</legend>
						  <label for="nomeContato">Informe o seu Nome:</label> <br>
						  <input type="text" id="nomeContato" name="nomeContato" size="50px" required="true"><br><br>
						  <label for="telefoneContato">Informe o seu Telefone: </label> <br>
						  <input type="tel" id="telefoneContato" name="telefoneContato" placeholder="(99)9-9999-9999" pattern="[0-9]{2}-[0-9]{1}-[0-9]{4}-[0-9]{4}" required="true"> <br><br>
						  <label for="emailContato">Informe o seu Email:</label> <br>
						  <input type="email" id="emailContato" name="emailContato" size="50px" required="true"><br><br>
						  <label for="dataContato">Informa a data atual:</label> <br>
						  <input type="date" id="dataContato" name="dataContato" size="50px" required="true"><br><br>
						  <label for="mensagemContato">Mensagem:</label> <br>
						  <textarea cols=50 id="mensagemContato" rows="10" name="mensagemContato" maxlength="200" wrap="hard" placeholder="Escreva aqui as dúvias, solicitações ou sugestões!" required="true"></textarea>
							<br><br>
						  <input type="submit" value="Enviar">
				 	</fieldset>
			</form>

	</div>
	<br><br><br>
<?php include('voltarTopo.php');?>
<?php include('rodape.php');?>
