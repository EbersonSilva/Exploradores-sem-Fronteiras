<?php
//Variáveis

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];


// Corpo E-mail
$arquivo = "
<style type='text/css'>
body {
margin:0px;
font-family:Verdane;
font-size:12px;
color: #666666;
}
a{
color: #666666;
text-decoration: none;
}
a:hover {
color: #FF0000;
text-decoration: none;
}
table {
	padding: 5px;
	border: solid 1px #ccc;
	background-color: #fff;
	font-size: 14px;
	font-family: sans-serif;
}
</style>
  <html>
	  <table width='700' border='0' cellpadding='5' cellspacing='1' bgcolor='#fff'>
		  <tr>
			<td>
<tr>
			   <td width='500'>Nome Completo:$nome</td>
			  </tr>
			  <tr>
				<td width='320'>E-mail:<b>$email</b></td>
   </tr>
	<tr>
				<td width='320'>Telefone:<b>$telefone</b></td>
			  </tr>
			  <tr>
				<td width='320'>Mensagem:$mensagem</td>
			  </tr>
		  </td>
		</tr>
	  </table>
  </html>
";

//enviar

  // emails para quem será enviado o formulário
  $emailenviar = "contato@exploradoressemfronteiras.com.br";
  $destino = $emailenviar;
  $assunto = $_POST['assunto'];

  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
      
  $headers .= "From: $email"."\r\n". 
	"X=Mailer:PHP/".phpversion();

// E-mail que receberá a resposta quando se clicar no 'Responder' de seu leitor de e-mails
$headers .= "Reply-To: $email\n";


  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
  if($enviaremail){
  $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
  echo '
  <script>
  alert("Mensagem enviada com sucesso!");
  window.location.href = "https://exploradoressemfronteiras.com.br/index.html";
</script>';

  echo " <meta http-equiv='refresh' content='10;URL=index.html'>";
  } else {
  $mgm = "ERRO AO ENVIAR E-MAIL!";
  echo '
  <script>
  alert("Ocorreu um erro ao enviar sua mensagem!");
  window.location.href = "https://exploradoressemfronteiras.com.br/index.html";
</script>';

  echo " <meta http-equiv='refresh' content='10;URL=index.html'>";
  }
?>