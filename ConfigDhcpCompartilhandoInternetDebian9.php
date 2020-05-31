
<!--Importando os arquivos necessários-->
<?php include('cabecalho.php');?>
<?php include('menuPaginasIndividuais.php');?>

		<div class="formataTutoriaisIndividuais">

			<h3 class="tituloTreinamentos" align="center"> Configurando DHCP e compartilhando a internet no Debian 9.8!</h3>

			 
			<br />
			A primeira coisa que devemos fazer é realizar a instalação de alguns pacotes.<br />

			Lembrando que é sempre bom atualizar os repositórios com o comando apt-get update e logo após atualizar o sistema com o comando apt-get upgrade.<br />


			Siga o passo a passo abaixo:<br /><br />

			Atualizando os repositórios: apt-get update<br />

			Atualizando o sistema: apt-get upgrade<br />


			Agora vamos começar a fazer as instalações dos serviços necessários.<br /><br />
			 

			1 - Instalando o dhcp-server<br />

			apt install isc-dhcp-server<br />


			2 - Uma vez instalado o dhcp-server, é hora de configurar o arquivo dhcpd.conf <br />

			Como root acesse o caminho abaixo:<br /><br />

			nano /etc/dhcp/dhcpd.conf<br />


			Obs.: Considerando que o meu domínio é: samba4.local e minha faixa de rede é 10.10.10.0<br />

			        O ip do meu servidor Debian é 10.10.10.1 e do meu link externo é 192.168.25.16<br />

			 

			option domain-name "samba4.local";<br />
			option domain-name-servers 10.10.10.1, 192.168.25.16;<br /><br />

			Descomente a linha abaixo:<br />
			#authoritative;<br />

			No final do arquivo acrescenta<br /><br />

			subnet 10.10.10.0 netmask 255.255.255.0 {<br />
			option routers 10.10.10.1;<br />
			option subnet-mask 255.255.255.0;<br />
			range dynamic-bootp 10.10.10.21 10.10.10.240;<br />
			}<br /><br />

			 3 - Definindo em qual interface vai rodar o dhcp<br />
			Considere que o nome da minha placa de rede  que vai distribuir o dhcp é "enp0s8".<br />

			Como usuário root, acesse:<br /><br />

			nano /etc/default/isc-dhcp-server<br />

			INTERFACE="enp0s8" --> Definindo em que placa será atribuido o dhcp<br />


			Restart o dhcp-server<br /><br />

			4 - systemctl restart isc-dhcp-server<br />


			Na dúvida, reinicia o servidor para validar o serviço.<br /><br />

			6 - reboot<br />


			Verifique o status do dhcp no servidor<br /><br />

			7 - systemctl status isc-dhcp-server<br />

			8 - Testa o dhcp no cliente<br />



			Uma vez configurado o dhcp, é hora de compartilhar a internet na rede interna.<br /><br />
			 

			9 - Compartilhando a internet<br /><br />

			Como root, acesse:<br />

			nano /etc/sysctl.conf<br />
			 

			Procura a linha: #net.ipv4.ip_forwarder=1<br />

			Descomenta: net.ipv4.ip_forwarder=1<br />

			 

			10 - Verifique se o retorno é o esperado.<br /><br />

			cat /proc/sys/net/ipv4/ip_forward<br />
			Retorna 0 --> Não permite encaminhamento<br />


			Agora execute o comando abaixo para validar a configuração.<br /><br />

			11 - sysctl -p<br />
			 

			12 - Verificando novamente a configuração<br /><br />
			cat /proc/sys/net/ipv4/ip_forward<br />

			Retorna 1 --> Permite encaminhamento<br />


			 

			13 - Por último, vamos configura o iptables para compartilhar a internet.<br /><br />

			iptables --table nat --append POSTROUTING --out-interface enp0s3 -j MASQUERADE --> Compartilhando internet da enp0s3<br />
			iptables --append FORWARD --in-interface enp0s8 -j ACCEPT --> Recebendo encaminhamento<br />

			14 Instalação iptable-persistent --> Caso não instale as regras serão perdidas ao reiniciar.<br /><br />

			iptables -L<br />
			iptables -L -t nat<br />

			apt-get install iptables-persistent<br />

			yes<br />

			Pronto! Se correu tudo bem, sua rede interna já está com dhcp e internet liberada normalmente.<br /><br />

			Lembrando que esta configuração e muito mais estão em nossos cursos. Caso tenha interesse acesse o menu "Sobre Nós" ou "Realizar Matrícula" para realizar a matrícula nos cursos.<br />



			Até a próxima e bons estudos!<br /><br />
			 
			<p align="center"> Procura vagas relacionadas a estes assuntos? </p>

			<p align="center"> Acesse e confira em: <a href="https://bit.ly/2XfDyI7" target="_BLANK"> ClickA Online</a></p>

		</div>

<?php include('voltarTopo.php');?>
<?php include('rodape.php');?>