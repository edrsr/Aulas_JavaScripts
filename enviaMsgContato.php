


	<div class="text-center">

		<?php
			$nomeContato = $_POST['nomeContato'];
			$telefoneContato = $_POST['telefoneContato'];
			$emailContato = $_POST['emailContato'];
			$mensagemContato = $_POST['mensagemContato'];
			$dataContato = $_POST['dataContato'];

		
			function data($dataContato){

			return date("d/m/Y", strtotime($dataContato));
			}
			// exemplo de utilização:
			//echo data($dataContato); 

			
				//echo "Olá ".$nomeContato.", Muito obrigado! <br /><br /><br /> Sua mensagem foi enviada com sucesso! <br /><br />";
				//echo "Em breve entraremos em contato com você!<br /><br /><br />";

				//echo "<br />Conferindo os dados: <br /><br /><br /> Nome: ".$nomeContato."<br /><br /> Telefone: ".$telefoneContato."<br /><br /> Email: ".$emailContato."<br /><br /> Data da Mensagem: ".data($dataContato)."<br /><br /> Mensagem: ".$mensagemContato."<br /><br />";
		?>
	
		




			<?php   

					//Créditos o código: https://github.com/PHPMailer/PHPMailer
					 
					// Inclui o arquivo class.phpmailer.php localizado na mesma pasta do arquivo php 
					include "PHPMailer-master/PHPMailerAutoload.php"; 
					 
					// Inicia a classe PHPMailer 
					$mail = new PHPMailer(); 
					 
					// Método de envio 
					$mail->IsSMTP(); 
					 
					// Enviar por SMTP 
					$mail->Host = "seuServidorSmtp"; 
					 
					// Você pode alterar este parametro para o endereço de SMTP do seu provedor 
					$mail->Port = 465; 
					 
					 
					// Usar autenticação SMTP (obrigatório) 
					$mail->SMTPAuth = true; 
					 
					// Usuário do servidor SMTP (endereço de email) 
					// obs: Use a mesma senha da sua conta de email 
					$mail->Username = 'enderecoDeEmailDeDestino'; 
					$mail->Password = 'senhadoEnderecoDeEmailDeDestino'; 
					 
					// Configurações de compatibilidade para autenticação em TLS 
					$mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) ); 
					 
					// Você pode habilitar esta opção caso tenha problemas. Assim pode identificar mensagens de erro. 
					// $mail->SMTPDebug = 2; 
					 
					// Define o remetente 
					// Seu e-mail 
					$mail->From = $email; 
					 
					// Seu nome 
					$mail->FromName = $email; 
					 
					// Define o(s) destinatário(s) 
					$mail->AddAddress('enderecoDeEmailDeDestino', $nomeContato); 
					 
					// Opcional: mais de um destinatário
					// $mail->AddAddress('fernando@email.com'); 
					 
					// Opcionais: CC e BCC
					// $mail->AddCC('joana@provedor.com', 'Joana'); 
					// $mail->AddBCC('roberto@gmail.com', 'Roberto'); 
					 
					// Definir se o e-mail é em formato HTML ou texto plano 
					// Formato HTML . Use "false" para enviar em formato texto simples ou "true" para HTML.
					$mail->SMTPSecure = 'ssl';
					$mail->IsHTML(true); 
					 
					// Charset (opcional) 
					$mail->CharSet = 'UTF-8'; 
					 
					// Assunto da mensagem 
					$mail->Subject = $mensagemContato; 
					 
					// Corpo do email 
					$mail->Body = "Dados do Contato via Site: <br /> Nome: ".$nomeContato."<br /><br /> Telefone: ".$telefoneContato."<br /><br /> Email: ".$emailContato."<br /><br /> Data da Mensagem: ".data($dataContato)."<br /><br /> Mensagem: ".$mensagemContato."<br /><br />";
					 
					// Opcional: Anexos 
					// $mail->AddAttachment("/home/usuario/public_html/documento.pdf", "documento.pdf"); 
					 
					// Envia o e-mail 
					$enviado = $mail->Send(); 
					 
					// Exibe uma mensagem de resultado 
					if ($enviado) 
					{ 
						
					    header("Location: http://localhost/edrsr_web/formularioContato.php"); 
					} else { 
					    echo "Houve um erro enviando o email: ".$mail->ErrorInfo; 
					} 
					 
					 
			?>




