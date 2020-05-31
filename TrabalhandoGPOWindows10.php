
<!--Importando os arquivos necessários-->
<?php include('cabecalho.php');?>
<?php include('menuPaginasIndividuais.php');?>

		<div class="formataTutoriaisIndividuais">

			<h3 class="tituloTreinamentos" align="center"> Trabalhando com GPO no Windows 10! </h3>

			<br /><br />
			No goole procura por - Windows 10 ADMX - para fazer o download. <br /><br />

			Faça o download do arquivo em uma máquina do seu domínio.<br /><br />

			 

			Estes são arquivos que são utilizados para configurar os modelos administrativos do Windows 10. <br /><br />

			Primeiro vamos apenas verificar os modelos administrativos no samba4.<br /><br />

			No RSAT, nas Políticas de Grupos(GPO) podemos verificar e configurar os Modelos Administrativos. <br /><br />

			Vá em diretivas de grupos, Edita uma gpo qualquer (Não altere, é apenas para verificar onde elas ficam, após isso pode fechar sem alterar), Politicas, Modelos administrativos.<br /><br />

			É aqui que vamos configurar os admx daqui a pouco. <br /><br />

			 Após realizar o download, vá até o arquivo baixado e execute o mesmo. <br /><br />

			Ao se executado ele começa a descompactar o arquivo em um local qualque do seu computador.<br /><br />

			Mais uma vez lembrando que este procedimento deve ser realizado em um computador da rede que deseja aplicar a gpo.

			Agora acesse a pasta descompactada, verifique que existem várias pastas com idiomas e outros arquivos soltos.

			Caso tenha alguma máquina Windows 10 com inglês ou qualquer outro idioma na sua rede, você terá que copiar a pasta do referido idioma também.<br /><br />

			Agora vamos criar um repositório no NOSSO DC PRINCIPAL para colocar todos os admx.<br /><br />

			A pasta que iremos criar deve ter o mesmo nome da pasta descompactada (PolicyDefinitions).<br /><br />

			Pelo Windows acesse o domínio pelo executar:<br /><br /><br />

			 

			Exemplo: \\dominio.samba4, sysvol, dominio.samba4, policies, cria a pasta com o nome da pasta descompactada aqui (PolicyDefinitions). <br /><br />

			Volta até a pasta que descompactou, copia o(s) pacote(s) de idioma(s) desejado(s) e cola no endereço em que foi criada a pasta (\\dominio.samba4\sysvol\dominio.samba4\policies\PolicyDefinitions).<br /><br />

			Caso utilize só português, copia só o pt-br. <br /><br /><br />

			Volta lá novamente e pega os arquivos soltos (admx) que estão juntos com os pacotes de idiomas(só os arquivos), cola no endereço em que foi criada a pasta (\\dominio.samba4\sysvol\dominio.samba4\policies\PolicyDefinitions).

			Agora precisamos verificar se o domínio já está reconhecendo os arquivos no RSAT:<br /><br /><br />

			Vá em "Gerenciamento de Política de Grupos" (Caso já esteja aberto, fecha e abre novamente).<br /><br />

			Edita qualquer política(GPO) Clicando em "Editar", clicar em "Politicas", clica em "Modelos Administrativos".<br /><br />

			Veja que deve está escrito "Recuperado pelo repositório loca".<br /><br />

			Na árvore exibida, logo após a opção "Componente do Windows", deve aparecer "Adicionar Recursos ao Windows 10". O que comprova que já poderemos trabalhar com GPO para o Windows 10.<br /><br /><br />

			 Observações:<br /><br /><br />

			1 - Este procedimento funciona para vários aplicativos ou sistemas. Ex: Firefox, Chrome, Office, etc.<br /><br />

			2 - Os DCs adicionais também reconhecerão os modelos ADMX copiados para o repositório central.<br /><br />
			 

			<p align="center"> Procura vagas relacionadas a estes assuntos? </p>

			<p align="center"> Acesse e confira em: <a href="https://bit.ly/2XfDyI7" target="_BLANK"> ClickA Online</a></p>

		</div>

<?php include('voltarTopo.php');?>
<?php include('rodape.php');?>