<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title></title>
<?php
 session_start();
  ob_start();
	if(@$_GET['faleconosco']=='envia')
  {
      if(@$_GET['paginas']=='checkout'){
    //echo 'Carrega dados';
  }
      //Inclui o arquivo class.phpmailer.php localizado na mesma pasta do arquivo php
      include "PHPMailer-master/PHPMailerAutoload.php";

      // Inicia a classe PHPMailer
      $mail = new PHPMailer();

      // Método de envio
      $mail->IsSMTP();

      // Enviar por SMTP
      $mail->Host = "mail.evve.com.br";

      // Você pode alterar este parametro para o endereço de SMTP do seu provedor
      $mail->Port = 25;


      // Usar autenticação SMTP (obrigatório)
      $mail->SMTPAuth = true;

      // Usuário do servidor SMTP (endereço de email)
      // obs: Use a mesma senha da sua conta de email
      $mail->Username = 'noreply@evve.com.br';
      $mail->Password = '@@evve2018';

      // Configurações de compatibilidade para autenticação em TLS
      $mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) );

      // Você pode habilitar esta opção caso tenha problemas. Assim pode identificar mensagens de erro.
      // $mail->SMTPDebug = 2;

      // Define o remetente
      // Seu e-mail
      $mail->From = "comercial@premiumengecon.com.br";

      // Seu nome
      $mail->FromName = "Premium Engecon";

      // Define o(s) destinatário(s)
      // $mail->AddAddress('comercial@premiumengecon.com.br', 'Comercial');
      // $mail->AddAddress('searchtalent@premiumengecon.com.br', 'Trabalhe conosco');
      $mail->AddAddress('rogerio_furquim@hotmail.com', 'Trabalhe conosco');
      //$mail->AddAddress('jr@grupoevve.com.br', 'Equipe do Site');

      // Opcional: mais de um destinatário
      // $mail->AddAddress('fernando@email.com');

      // Opcionais: CC e BCC
      // $mail->AddCC('joana@provedor.com', 'Joana');
      // $mail->AddBCC('roberto@gmail.com', 'Roberto');

      // Definir se o e-mail é em formato HTML ou texto plano
      // Formato HTML . Use "false" para enviar em formato texto simples ou "true" para HTML.
      $mail->IsHTML(true);

      // Charset (opcional)
      $mail->CharSet = 'UTF-8';

      // Assunto da mensagem
      $mail->Subject = 'Formulário de trabalhe conosco';
      $conteudoEmail .= "searchtalent@premiumengecon.com.br <br>";
      $conteudoEmail .= "Segue formulário enviado: <br><br>";
      $conteudoEmail .= "<b>Nome:</b> ". $_POST['nome'] . '<BR>';
      $conteudoEmail .= "<b>E-mail:</b> ". $_POST['email'] . '<BR>';
     
      $conteudoEmail .= "<b>Telefone:</b> ". $_POST['telefone'] . '<BR>';
       
      $conteudoEmail .= "<b>Mensagem:</b> ". $_POST['mensagem'] . '<BR>';  


      // Corpo do email
      $mail->Body = $conteudoEmail;

      // Opcional: Anexos
      // $mail->AddAttachment("/home/usuario/public_html/documento.pdf", "documento.pdf");

      // Envia o e-mail
      $enviado = $mail->Send();

      // Exibe uma mensagem de resultado
      if ($enviado)
      {
           echo "<script>alert('Sua mensagem foi enviada com sucesso!')</script>";
      } else {
           echo "Erro....";
      }
  }
  

      switch(@$_GET['paginas'])
  {
    case '': $urlBase = ''; include('home.php');break;
    case 'cadastro': $urlBase = ''; include('cadastro.php');break;
    case 'quem_somos': $urlBase = ''; include('quem_somos.php');break;
    case 'duvidas': $urlBase = ''; include('duvidas.php');break;
    case 'fale_conosco': $urlBase = ''; include('fale_conosco.php');break;

   



    default: include('404.php');
  }
?>


	
	
