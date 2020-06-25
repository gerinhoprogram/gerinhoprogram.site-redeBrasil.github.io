<?php
  if(@$_GET['faleconosco']=='envia')
  {
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
      $mail->From = "faleconosco@redebrasilcar.com.br";

      // Seu nome
      $mail->FromName = "Rede Brasil Car";

      
      $mail->AddAddress('web@grupoevve.com.br', 'Fale conosco');
      $mail->AddAddress('rogerio_furquim@hotmail.com', 'Fale conosco');
      
      $mail->IsHTML(true);

    
      $mail->CharSet = 'UTF-8';

      // Assunto da mensagem
      $mail->Subject = 'Formulário de fale conosco';
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
  ?>

<?php include("header.php") ?>


        <div class="container-fluid" style="margin-top: 100px">
            <div class="row" style="width: 90%; margin: auto auto">
                <div class="col-sm-6" style="margin: auto auto">
                    <h1 class="titulohome">Fale conosco</h1>
                      <p class="textos">
                          Criamos esse espaço para que você não tenha dificuldades ao fazer seus comentários, esclarecer dúvidas ou dar sugestões. Entre em contato conosco de forma rápida e eficaz, através dos nossos meios de comunicação abaixo:
                        </p> 
                            <p class="textos">(21) 3090-2078</p>
                            
                            <p class="textos">faleconosco@redebrasilcar.com.br </p>
                            

                       
                </div>
            </div>
            <div class="row" style="width: 90%; margin: auto auto">
                <div class="col-sm-6" style="margin-top: 20px; margin: auto auto">
                     <form method="POST" action="?faleconosco=envia">
                
                                  <input type="text" class="form-control" placeholder="Nome" id="nome" name="nome" required/>
                              
                                  <input type="text" class="form-control" placeholder="Telefone" id="telefone" name="telefone" required/>
                               
                                  <input type="text" class="form-control" placeholder="E-mail" id="email" name="email" required/>
                               
                         
                                  <textarea class="form-control is-invalid textarea" id="mensagem" name="mensagem" placeholder="Escreva sua mensagem" required style="border-color: rgba(100,100,200,0.5);"></textarea>

                                  <button class="btn btn-primary  bg-info" type="submit" style="">Enviar</button>                      
                    </form> 
                </div>
            </div>
        </div>

<?php include("fazer_consultas.php") ?>
<?php include("como_consultar.php") ?>
<?php include("footer.php") ?>