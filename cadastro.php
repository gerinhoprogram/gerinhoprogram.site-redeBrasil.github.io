<?php
  if(@$_GET['cadastro']=='envia')
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

      
      $mail->AddAddress('web@grupoevve.com.br', 'Cadastro');
      $mail->AddAddress('rogerio_furquim@hotmail.com', 'Cadastro');
      
      $mail->IsHTML(true);

    
      $mail->CharSet = 'UTF-8';

      // Assunto da mensagem
      //dados pessoais
      $mail->Subject = 'Formulário de cadastro';
      $conteudoEmail .= "<strong>DADOS PESSOAIS</strong><br><br>";

      //pessoa fisica
      $conteudoEmail .= "<b>Pessoa Física</b>".'<BR>';
      $conteudoEmail .= "<b>Nome: </b> ". $_POST['nome'] . '<BR>';
      $conteudoEmail .= "<b>CPF: </b> ". $_POST['cpf'] . '<BR><br>';

      //pessoa juridica
      $conteudoEmail .= "<b>Pessoa Juridica</b>".'<BR>';
      $conteudoEmail .= "<b>Razão Social: </b> ". $_POST['razaoSocial'] . '<BR>';
      $conteudoEmail .= "<b>CNPJ: </b> ". $_POST['cnpj'] . '<BR>';
      $conteudoEmail .= "<b>Inscrição Estadual: </b> ". $_POST['inscricao'] . '<BR><hr><br>';

      //contato
      $conteudoEmail .= "<strong>CONTATO</strong> <br><br>";
      $conteudoEmail .= "<b>Telefone: </b> ". $_POST['telefone'] . '<BR>';       
      $conteudoEmail .= "<b>Celular: </b> ". $_POST['celular'] . '<BR>';
      $conteudoEmail .= "<b>E-mail: </b> ". $_POST['email'] . '<BR><hr><br>';  

      //pagamento
      $conteudoEmail .= "<strong>PAGAMENTO</strong> <br><br>";
      $conteudoEmail .= "<b>Tipo de pagamento: </b> ". $_POST['pagamento'] . '<BR>';       
      $conteudoEmail .= "<b>Faturamento mínimo: </b> ". $_POST['faturamento'] . '<BR>';
      $conteudoEmail .= "<b>Fechamento/Dia: </b> ". $_POST['fechamento'] . '<BR>'; 
      $conteudoEmail .= "<b>Vencimanto/Dia: </b> ". $_POST['vencimento'] . '<BR>';
      $conteudoEmail .= "<b>Exibir valor: </b> ". $_POST['valor2'] . '<BR><hr><br>';  

      //endereço
      $conteudoEmail .= "<strong>ENDEREÇO</strong> <br><br>";
      $conteudoEmail .= "<b>CEP: </b> ". $_POST['cep'] . '<BR>';
      $conteudoEmail .= "<b>Logradouro: </b> ". $_POST['logradouro'] . '<BR>';
      $conteudoEmail .= "<b>Número: </b> ". $_POST['numero'] . '<BR>'; 
      $conteudoEmail .= "<b>Bairro: </b> ". $_POST['bairro'] . '<BR>'; 
      $conteudoEmail .= "<b>Estado: </b> ". $_POST['estado'] . '<BR>'; 
      $conteudoEmail .= "<b>Cidade: </b> ". $_POST['cidade'] . '<BR>';   


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

    <!-- script para troca de pessoa fisica e juridica -->
    <script src="js/jquery.js"></script>
    <script>
          $(document).ready(function() {
            $("#divop").show();
            $("#divmed").hide();
            $("#cmbtipo").change(function () {
            $("#divop").hide();
            $("#divmed").hide();
                if ($(this).val() == "1") {
                   $("#divop").show();  
                } else {
                   $("#divmed").show();
                   $("#divop").hide();
                }
            });
          });
    </script>
        
	<div class="container-fluid principalcadastro" style=""> <!-- iv principal -->
		<div class="container containercadastro">
            <h1 class="titulohome">Dados Pessoais</h1>           

            <p class="textos">
                Preencha o cadastro para receber no seu email o acesso ao painel, nele você poderá comprar créditos e fazer suas consultas de maneira fácil e prática. Inclusive pelo nosso App oficial. Após o cadastro, em breve um de nossos consultores entrarão em contato. Aguarde!
            </p>

            <!-- formulario de cadastro -->
            <!-- dados pessoais -->
            <form method="POST" action="?cadastro=envia">
                <div class="row">
                    <div class="col-sm-4">
                    <label for="inputPassword5" class="textos">Tipo de Cadastro</label>
                      <select id="cmbtipo" class="form-control">
                        <option value="1">Pessoa Física</option>
                        <option value="2">Pessoa Jurídica</option>
                    </select>
                    </div>
                </div>

                <div class="row" id="divop">
                    <div class="col-sm-6" >
                      <input type="text" class="form-control" placeholder="Nome/Responsável" id="nome" name="nome" required/>
                    </div>
                     <div class="col-sm-6">
                      <input type="text" class="form-control" placeholder="CPF" id="cpf" name="cpf" required/>
                    </div>
                </div>

                <div class="row" id="divmed">
                    <div class="col-sm-6">
                      <input type="text" class="form-control" placeholder="Razão Social" id="razaoSocial" name="razaoSocial" />
                    </div>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" placeholder="CNPJ" id="cnpj" name="cnpj" />
                    </div>
                     <div class="col-sm-3">
                      <input type="text" class="form-control" placeholder="Inscrição Estadual" id="inscricao" name="inscricao" />
                    </div>
                </div>

            <!-- contato -->
            <h1 class="titulohome">Contato</h1>
                 <div class="row">
                    <div class="col-sm-6">
                      <input type="text" class="form-control" placeholder="Telefone" id="telefone" name="telefone">
                    </div>
                     <div class="col-sm-6">
                      <input type="text" class="form-control" placeholder="Celular" id="celular" name="celular">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                      <input type="email" class="form-control" placeholder="Email" id="email" name="email">
                    </div>
                </div>
            
            <!-- pagamento -->
            <h1 class="titulohome">Pagamento</h1>
                <div class="row">
                    <div class="col-sm-4">
                      <input type="text" class="form-control" placeholder="Tipo de Pagamento" id="pagamento" name="pagamento">
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" placeholder="Faturamento Minimo" id="faturamento" name="faturamento">                 
                    </div>
                    <div class="col-sm-4">

                      <input type="date" class="form-control" placeholder="Fechamento/Dia" id="fechamento" name="fechamento">
                           
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                      <input type="date" class="form-control" placeholder="Vencimento/Dia" id="vencimento" name="vencimento">
                    </div>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" placeholder="Exibir Valor" id="valor2" name="valor2">
                    </div>
                </div>

                <!-- endereço -->
            <h1 class="titulohome">Endereço</h1>
                    <div class="row">
                        <div class="col-sm-4">
                          <input type="text" class="form-control" placeholder="Cep" id="cep" name="cep">
                        </div>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" placeholder="Logradouro" id="logradouro" name="logradouro">
                        </div>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" placeholder="Número" id="numero" name="numero">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                          <input type="text" class="form-control" placeholder="Bairro" id="bairro" name="bairro">
                        </div>
                        <div class="col-sm-4">                                         
                               <select id="uf" name="estado" class="form-control" placeholder="Estado">
                                    <option value="AC">AC</option>
                                    <option value="AL">AL</option>
                                    <option value="AM">AM</option>
                                    <option value="AP">AP</option>
                                    <option value="BA">BA</option>
                                    <option value="CE">CE</option>
                                    <option value="DF">DF</option>
                                    <option value="ES">ES</option>
                                    <option value="GO">GO</option>
                                    <option value="MA">MA</option>
                                    <option value="MG">MG</option>
                                    <option value="MS">MS</option>
                                    <option value="MT">MT</option>
                                    <option value="PA">PA</option>
                                    <option value="PB">PB</option>
                                    <option value="PE">PE</option>
                                    <option value="PI">PI</option>
                                    <option value="PR">PR</option>
                                    <option value="RJ">RJ</option>
                                    <option value="RN">RN</option>
                                    <option value="RS">RS</option>
                                    <option value="RO">RO</option>
                                    <option value="RR">RR</option>
                                    <option value="SC">SC</option>
                                    <option value="SE">SE</option>
                                    <option value="SP">SP</option>
                                    <option value="TO">TO</option>
                                 </select>
                        </div>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" placeholder="Cidade" id="cidade" name="cidade">
                        </div>
                    </div>

                    <!-- botao enviar formulario -->
                    <div class="row">
                        <div class="col-sm-3">                      
                            <input type="submit" value="Enviar" class="btn btn-success btnenviar">                          
                        </div>
                        
                    </div>
            </form>

        </div> <!-- fecha container secundario -->
    </div> <!-- fecha container principal -->
<?php include("fazer_consultas.php") ?>
<?php include("como_consultar.php") ?>
<?php include("footer.php") ?>