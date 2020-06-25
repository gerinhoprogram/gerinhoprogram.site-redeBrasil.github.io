    <style type="text/css">
      #bb{margin: 20px auto 10px auto; width: 30%;}
      #bb2{margin: 20px auto 10px auto; width: 30%;}
    </style>
    <div id="consultas" style=""></div>
    <div class="container-fluid d-none d-md-block" style="width: 60%">
     
    <h1 class="titulohome" style="margin-top: 100px" id="consultas">Faça uma <br>consulta</h1>
              
        <!-- botoes de consulta auto e credito -->              
        <nav class="btnconsultas" style="width: 80%; margin: auto auto" id="meu">
            <div class="nav nav-tabs" id="nav-tab" role="tablist" style="width: 100%; margin:auto auto; " >

              <a style="width: 48%; background-color: #e7b141; padding-top: 25px; height: 170px; margin-right: 4px"  class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">  

                <span id="imgautodesk"><img src="img/btnauto.png"></span>

                <p id="consultaautodesk" style="font-family: 'Raleway', sans-serif; font-size: 1.5em; color: #ffff; margin-top: 10px" >
                  Consultas<br>
                  <strong id="strongdesk" style="font-family: 'Raleway', sans-serif; color: #ffff; font-weight: 800; margin-top: -10px" >Auto</strong></p>
              </a>


              <a style="width: 48%; background-color: #ffff; padding-top: 25px; height: 170px; border: 2px solid #606060; margin-left: 4px" class="nav-item nav-link btnauto" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"> 

                 <span id="imgcredesk"><img src="img/btncredito2.png" ></span>

                 <p id="consultacreditodesk" style="font-family: 'Raleway', sans-serif; font-size: 1.5em; color: #606060; margin-top: 10px" >
                  Consultas<br>
                  <strong id="strong2desk" style="font-family: 'Raleway', sans-serif; color: #606060; font-weight: 800;" >Crédito</strong></p>
              </a>
              
            </div>
      </nav>
       
          <div class="tab-content" id="nav-tabContent">

          <!-- conteudo do botao consulta auto --> 
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              
            
            <div class="row" style="width: 100%; margin-top: 20px;">
                  <div class="col-sm-4" style="">
                    <!-- links de consulta auto -->
                    <div class="nav flex-column" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Auto Completa</a>

                      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Auto Perícia</a>

                      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Auto Perícia Básica</a>

                      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Auto Perícia Plus</a>

                      <a class="nav-link" id="v-pills-settings-tab2" data-toggle="pill" href="#v-pills-settings2" role="tab" aria-controls="v-pills-settings" aria-selected="false">Auto Bin + Leilão</a>

                      <a class="nav-link" id="v-pills-settings-tab3" data-toggle="pill" href="#v-pills-settings3" role="tab" aria-controls="v-pills-settings" aria-selected="false">Auto Base Bin</a>

                      <a class="nav-link" id="v-pills-settings-tab4" data-toggle="pill" href="#v-pills-settings4" role="tab" aria-controls="v-pills-settings" aria-selected="false">Auto Total</a>                  
                    </div>
                  </div>

                  <div class="col-sm-8"> <!-- texto dos links de consulta alto com botao comprar -->
                    <div class="tab-content" id="v-pills-tabContent">
                      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">                           
                      <p class="textos" style="font-size: 10pt">
                        Bin com histórico de roubo e furto
                        |  Histórico de roubo e furto | Base estadual com débitos | Proprietário anterior e atual |  SSP – restrições
                        estaduais |  Gravame |  Restrições denatran |  Recall |  Restrições renajud – judicial |   Comunicado de venda |
                        Restrições renainf – multas de outros estados |  Decodificador de chassi |  Código fipe |  Leilão I |  Leilão II |
                        Oferta de leilão sem edital |  Histórico de avaria (se o veículo passou em alguma oficina credenciando por seguradora).
                        |  Cotações de seguros |  Sinistro |  Indício de sinistro |  Registro de acidente |  Ação trabalhista |  Pendências
                        financeiras |  Protesto em cartório |  SPC |  Serasa nacional |  Cheque sem fundo |  Quadro societário |  Empresa no
                        nome do proprietário do veículo consultado |  Situação cadastral na receita federal |  Óbito |  Localização |  Endereço
                        |  Telefone |  E-mail |</p>
                                                    
                          <p>
                            <button type="button" class="btn btn-outline-success btnpreco">
                              <p style="margin: auto auto;">
                                <img src="img/preco.png" style="width: 90%">
                              </p>
                            </button><a href="<?=$urlBase?>cadastro"><button type="button" class="btn btn-success btncompra">Comprar</button></a>
                            
                          </p>
                      </div>

                      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <p class="textos" style="font-size: 10pt">
                            Bin com histórico de roubo e furto | Histórico de roubo e furto | Base estadual com débitos | Proprietário anterior e atual | SSP – restrições estaduais | Gravame | Restrições denatran | 
                            Recall | Restrições renajud – judicial | Comunicado de venda | Restrições renainf – multas de outros estados | Decodificador de chassi | Código fipe | Leilão I | Leilão II | Oferta de leilão sem edital | Histórico de avaria (se o veículo passou em alguma oficina credencianda por seguradora). | Sinistro | Indício de sinistro | Ação trabalhista | Empresa no nome do proprietário do veículo consultado          
 
                          </p>
                          <p>
                            <button type="button" class="btn btn-outline-success btnpreco">
                               <p style="margin: auto auto;">
                                <img src="img/preco28.png" style="width: 90%">
                              </p>
                            </button><a href="<?=$urlBase?>cadastro"><button type="button" class="btn btn-success btncompra">Comprar</button></a>
                          </p>
                      </div>

                      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <p class="textos">
                            
                          </p>
                          <p>
                            <button type="button" class="btn btn-outline-success btnpreco">
                              <p style="margin: auto auto;">
                                <img src="img/preco21,50.png" style="width: 90%">
                              </p>
                            </button><a href="<?=$urlBase?>cadastro"><button type="button" class="btn btn-success btncompra">Comprar</button></a>           
                          </p>
                      </div>

                      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <p class="textos" style="font-size: 10pt">
                            Bin Com Histórico De Roubo E Furto | Histórico De Roubo E Furto | Proprietário Anterior E Atual | Ssp – Restrições Estaduais | Decodificador De Chassi | Código Fipe | Leilão I | Leilão Ii | Oferta De Leilão Sem Edital
                          </p>
                          <p>
                            <!-- <button type="button" class="btn btn-outline-success btnpreco">
                              <p style="margin: auto auto;">
                                <img src="img/preco2.png" style="width: 100%">
                              </p>
                            </button> -->
                            <a href="<?=$urlBase?>cadastro"><button type="button" class="btn btn-success btncompra" style="width: 100%">Comprar</button></a>                    
                          </p>
                      </div>

                       <div class="tab-pane fade" id="v-pills-settings2" role="tabpanel" aria-labelledby="v-pills-settings-tab2">
                        <p class="textos" style="font-size: 10pt">
                            Bin Com Histórico De Roubo E Furto | Histórico De Roubo E Furto | Leilão I | Leilão II | Oferta De Leilão Sem Edital       
                          </p>
                          <p>
                            <button type="button" class="btn btn-outline-success btnpreco">
                              <p style="margin: auto auto;">
                                <img src="img/preco16,50.png" style="width: 90%">
                              </p>
                            </button><a href="<?=$urlBase?>cadastro"><button type="button" class="btn btn-success btncompra">Comprar</button></a>
                            
                          </p>
                      </div>

                      <div class="tab-pane fade" id="v-pills-settings3" role="tabpanel" aria-labelledby="v-pills-settings-tab3">
                        <p class="textos">
                            
                          </p>
                          <p>
                            <button type="button" class="btn btn-outline-success btnpreco">
                              <p style="margin: auto auto;">
                                <img src="img/preco07,50.png" style="width: 90%">
                              </p>
                            </button><a href="<?=$urlBase?>cadastro"><button type="button" class="btn btn-success btncompra">Comprar</button></a>                     
                          </p>
                      </div>

                      <div class="tab-pane fade" id="v-pills-settings4" role="tabpanel" aria-labelledby="v-pills-settings-tab4">
                       <p class="textos" style="font-size: 10pt">
                            Pessoa Física: Nome, CPF, Data de Nascimento, Situação do CPF, Nome da mãe, Origem do CPF, Sexo, Grau de Instrução, Endereços, Telefones, Grafias, Participação em  empresas, SCORE DE CRÉDITO, Restrições Financeiras, Protestos, Cheques devolvidos, Recuperação, Falência, Ações Judiciais.
                             | Pessoa Jurídica: Razão Social, CNPJ, Data de Fundação, Data de Encerramento, NIRE, Situação CNPJ, Data situação, Sintegra, Natureza Jurídica, Filiais, CNAE, Faturamento Presumido, Faixa, Faturamento Anual, quantidade de consultas, cheques devolvidos, quadro de sócios, Participação em Empresas, Restrições Financeiras, Comportamento de
                            pagamento, endereço completo, telefones, SCORE, probabilidade de
                            inadimplência,Protestos, Ações Judiciais e Falência.
                          </p>
                          <p>
                            <!-- <button type="button" class="btn btn-outline-success btnpreco">
                              <p style="margin: auto auto;">
                                <img src="img/preco3.png" style="width: 100%">
                              </p>
                            </button> -->
                            <!-- <a href="cadastro.php"><button type="button" class="btn btn-success btncompra" style="width: 100%">Comprar</button></a> -->
                            
                          </p>
                      </div>
                        
                    </div>
                  </div> <!-- fim dos rtextos -->
                </div>      
            </div> 
            <!-- fim do botao consulta auto -->
            

            
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

           
              <div class="row" style="width: 100%; margin-top: 20px;">
                  <div class="col-sm-4" >

                    <!-- links de consulta credito -->
                    <div class="nav flex-column" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                      <a class="nav-link active" id="v-pills-home-tab5" data-toggle="pill" href="#v-pills-home5" role="tab" aria-controls="v-pills-home" aria-selected="true">Auto Mix Completa CNPJ</a>

                      <a class="nav-link" id="v-pills-profile-tab6" data-toggle="pill" href="#v-pills-profile6" role="tab" aria-controls="v-pills-profile" aria-selected="false">Auto Mix Completa CPF</a>

                      <a class="nav-link" id="v-pills-messages-tab7" data-toggle="pill" href="#v-pills-messages7" role="tab" aria-controls="v-pills-messages" aria-selected="false">Localização</a>

                      <a class="nav-link" id="v-pills-settings-tab8" data-toggle="pill" href="#v-pills-settings8" role="tab" aria-controls="v-pills-settings" aria-selected="false">Negativação de Devedores</a>

                      <a class="nav-link" id="v-pills-settings-tab9" data-toggle="pill" href="#v-pills-settings9" role="tab" aria-controls="v-pills-settings" aria-selected="false">Lista Telefonica ONNL</a>

                      <a class="nav-link" id="v-pills-settings-tab10" data-toggle="pill" href="#v-pills-settings10" role="tab" aria-controls="v-pills-settings" aria-selected="false">Confirma Telefone</a>

                      <a class="nav-link" id="v-pills-settings-tab11" data-toggle="pill" href="#v-pills-settings11" role="tab" aria-controls="v-pills-settings" aria-selected="false">Localização Plus</a> 

                      <a class="nav-link" id="v-pills-settings-tab12" data-toggle="pill" href="#v-pills-settings12" role="tab" aria-controls="v-pills-settings" aria-selected="false">Cheque Plus</a>

                      <a class="nav-link" id="v-pills-settings-tab13" data-toggle="pill" href="#v-pills-settings13" role="tab" aria-controls="v-pills-settings" aria-selected="false">Score</a>

                      <a class="nav-link" id="v-pills-settings-tab14" data-toggle="pill" href="#v-pills-settings14" role="tab" aria-controls="v-pills-settings" aria-selected="false">Cred Mix</a>                       
                    </div>
                  </div>

                  <div class="col-sm-8"> <!-- texto dos links -->
                    <div class="tab-content" id="v-pills-tabContent">

                      <div class="tab-pane fade show active" id="v-pills-home5" role="tabpanel" aria-labelledby="v-pills-home-tab5">
                          <p class="textos" style="font-size: 10pt">
                            Pendências Financeiras | Protesto Em Cartório | SPC | Serasa Nacional | Cheque Sem Fundo | Quadro Societário | Empresa No Nome Do Proprietário Do Veículo Consultado | Situação Cadastral Na Receita Federal | Óbito | Situação Síntegra | Localização | Endereço | Telefone | E-mail 
                          </p>
                          <p>
                            <button type="button" class="btn btn-outline-success btnpreco">
                              <img src="img/preco06,50.png" style="width: 90%">
                            </button><a href="<?=$urlBase?>cadastro"><button type="button" class="btn btn-success btncompra">Comprar</button></a>
                            
                          </p>
                      </div>

                      <div class="tab-pane fade" id="v-pills-profile6" role="tabpanel" aria-labelledby="v-pills-profile-tab6">
                        <p class="textos" style="font-size: 10pt">
                            Pendências Financeiras | Protesto Em Cartório | Spc | Serasa Nacional | Cheque Sem Fundo |
                            Protestos Ieptb | Quadro Societário | Empresa No Nome Do Proprietário Do Veículo Consultado |
                            Situação Síntegra | Localização | Endereço | Telefone | E-mail 
                          </p>
                          <p>
                            <button type="button" class="btn btn-outline-success btnpreco">
                              <img src="img/preco06,50.png" style="width: 90%">
                            </button><a href="<?=$urlBase?>cadastro"><button type="button" class="btn btn-success btncompra">Comprar</button></a>
                          </p>
                      </div>

                      <div class="tab-pane fade" id="v-pills-messages7" role="tabpanel" aria-labelledby="v-pills-messages-tab7">
                        <p class="textos" style="font-size: 10pt">
                            Endereço | Telefone | E-mail
                          </p>
                          <p>
                            <button type="button" class="btn btn-outline-success btnpreco">
                              <img src="img/preco02,50.png" style="width: 90%">
                            </button><a href="<?=$urlBase?>cadastro"><button type="button" class="btn btn-success btncompra">Comprar</button></a>
                          </p>
                      </div>

                      <div class="tab-pane fade" id="v-pills-settings8" role="tabpanel" aria-labelledby="v-pills-settings-tab8">
                        <p class="textos" style="font-size: 10pt">
                            Nesta consulta o cliente negativa seus devedores a nível nacional.
                          </p>
                          <p>
                            <button type="button" class="btn btn-outline-success btnpreco">
                              <img src="img/preco07,80.png" style="width: 90%">
                            </button><a href="<?=$urlBase?>cadastro"><button type="button" class="btn btn-success btncompra">Comprar</button></a>             
                          </p>
                      </div>

                       <div class="tab-pane fade" id="v-pills-settings9" role="tabpanel" aria-labelledby="v-pills-settings-tab9">
                        <p class="textos" style="font-size: 10pt">
                           Telefones e endereços atualizados em tempo real com operadoras de telefonia fixa. CONSULTA CPF/CNPJ
                          </p>
                          <!-- <p>
                            <button type="button" class="btn btn-outline-success btnpreco">
                              <img src="img/preco2.png" style="width: 100%">
                            </button><a href="cadastro.php"><button type="button" class="btn btn-success btncompra">Comprar</button></a>
                            
                          </p> -->
                      </div>

                      <div class="tab-pane fade" id="v-pills-settings10" role="tabpanel" aria-labelledby="v-pills-settings-tab10">
                        <p class="textos" style="font-size: 10pt">
                            Telefones e endereços atualizados em tempo real com operadoras de telefonia fixa.
                          </p>
                          <!-- <p>
                            <button type="button" class="btn btn-outline-success btnpreco">
                              <img src="img/preco.png" style="width: 100%">
                            </button><a href="cadastro.php"><button type="button" class="btn btn-success btncompra">Comprar</button></a>       
                          </p> -->
                      </div>

                      <div class="tab-pane fade" id="v-pills-settings11" role="tabpanel" aria-labelledby="v-pills-settings-tab11">
                        <p class="textos" style="font-size: 10pt">
                            <strong>Pessoa Física:</strong> Nome, nome da mãe, data de nascimento, sexo, nome do cônjuge, e-mail, perfil profissional, renda presumida, escolaridade, ocupação, se possui veículo,endereços associados, telefones associados, pessoas no mesmo endereço.<br>
                            <strong>Pessoa Jurídica:</strong> Razão Social, data da abertura, status, nome fantasia, emails, CNAES, capital social, porte, faturamento presumido, quantidade de proprietários, quantidade de funcionários, endereços associados, telefones associados.
                          </p>
                          <!-- <p>
                            <button type="button" class="btn btn-outline-success btnpreco">
                              <img src="img/preco3.png" style="width: 100%">
                            </button><a href="cadastro.php"><button type="button" class="btn btn-success btncompra">Comprar</button></a>      
                          </p> -->
                      </div>

                      <div class="tab-pane fade" id="v-pills-settings12" role="tabpanel" aria-labelledby="v-pills-settings-tab12">
                        <p class="textos" style="font-size: 10pt">
                            Confirmação de dados cadastrais, confirmação bancária: endereço, telefone e fax da Agência. Cheque sem Fundo CCF BC, Recheque, informação de cheques Sustados, Extraviados, Roubados , Cancelados e bloqueados, Recheque online, confirmação dados da conta corrente / titularidade mais status da conta corrente: Ativa, Inativa, Suspensa ou Encerrada*, pendências no comércio, Confirmação de Telefone e Endereço, últimos cinco telefones consultados e confirmação do CEP.
                          </p>
                          <!-- <p>
                            <button type="button" class="btn btn-outline-success btnpreco">
                              <img src="img/preco2.png" style="width: 100%">
                            </button><a href="cadastro.php"><button type="button" class="btn btn-success btncompra">Comprar</button></a> 
                          </p> -->
                      </div>

                      <div class="tab-pane fade" id="v-pills-settings13" role="tabpanel" aria-labelledby="v-pills-settings-tab13">
                        <p class="textos" style="font-size: 10pt">
                            Pessoa Física: Confirma nome, data de nascimento, CCF (Cadastro cheque sem fundo), Cheque Lojista (cheque registrado pela empresa), Cheque Sustado quando informado no ato da consulta, Contumácia da Alínea 21, Contraordem, Cheque roubado, Registro Bancos, financeiras, Cartão Crédito, Companhia Telefônica, Atacado, Indústria, Comercio
                            Varejista, Consultas Realizadas (últimos 90 dias), Confirma Fone (localiza telefone pelo CPF ou através do número fixo confirma endereço de instalação), score de 6 meses.
                          </p>
                          <!-- <p>
                            <button type="button" class="btn btn-outline-success btnpreco">
                              <img src="img/preco.png" style="width: 100%">
                            </button><a href="cadastro.php"><button type="button" class="btn btn-success btncompra">Comprar</button></a> 
                          </p> -->
                      </div>

                      <div class="tab-pane fade" id="v-pills-settings14" role="tabpanel" aria-labelledby="v-pills-settings-tab14">
                        <p class="textos" style="font-size: 10pt">
                            <strong>Pessoa Física:</strong> Confirmação de dados cadastrais, Cheque sem Fundo CCF BC, Pendências financeiras, dívidas de Leasing, Cartões de Crédito, Refinanciamento de Dívidas, pendências de Varejo, Notas Promissórias, Duplicatas, Registrados na SERASA e no SPC Brasil.<br>
                            <strong>Pessoa Jurídica:</strong> Confirmação de dados cadastrais, Cheque sem Fundo CCF BC, Pendências financeiras, dívidas de Leasing, Cartões de Crédito, Refinanciamento de Dívidas, pendências de Varejo, Notas Promissórias, Duplicatas, Registrados na SERASA e no SPC Brasil.
                          </p>
                         <!--  <p>
                            <button type="button" class="btn btn-outline-success btnpreco">
                              <img src="img/preco3.png" style="width: 100%">
                            </button><a href="cadastro.php"><button type="button" class="btn btn-success btncompra">Comprar</button></a> 
                          </p> -->
                      </div>
            
                    </div>
                  </div> <!-- fim do texto dos links -->
                </div>
              </div><!-- fim de consulta credito desktop -->

            </div> <!-- fim do botao consulta credito -->
         </div> 

   
        <!-- tela celular -->
    <div class="container-fluid d-block d-sm-none" style="width: 100%; margin: auto auto">
    <h1 class="titulohome" style="margin-top: 100px" id="consultas2">Faça uma <br>consulta</h1>
              
        <!-- botoes de consulta auto e credito -->              
        <nav class="btnconsultas" style="width: 100%" >
            <div class="nav nav-tabs" id="nav-tab" id="tab2" role="tablist" style="width: 100%; margin:auto auto;">

              <a style="width: 60%; margin: auto auto; background-color: #e7b141" id="auto2" class="nav-item nav-link active btnauto" id="nav-home-tab2" data-toggle="tab" href="#nav-home2" role="tab" aria-controls="nav-home" aria-selected="true">
                <span id="imgg"><img src="img/btnauto.png" id="removauto"></span>
               <!--  <img src="img/btnauto2.png" style="width: 100%;" id="imgauto2" hidden="" > -->
                
                <p style="font-family: 'Raleway', sans-serif; color: #ffff" id="consultaauto">
                  Consultas<br>
                  <strong style="font-family: 'Raleway', sans-serif; color: #ffff" id="strong">AUTO</strong></p>
              </a>

              <a style="width: 60%; margin: auto auto; background-color: #ffffff" id="credito" class="nav-item nav-link btnauto" id="nav-profile-tab3" data-toggle="tab" href="#nav-profile2" role="tab" aria-controls="nav-profile" aria-selected="false">
                 <span id="imgg2"><img src="img/btncredito2.png"></span>
                 <!--  <img src="img/btncredito.png" style="width: 100%; visibility: hidden;" id="imgcredito2"> -->
                 
                 <p style="font-family: 'Raleway', sans-serif; color: #606060" id="consultacredito">
                  Consultas<br>
                  <strong style="font-family: 'Raleway', sans-serif; color: #606060" id="strong2">CRÉDITO</strong></p>
              </a>
              
            </div>
      </nav>
       
          <div class="tab-content" id="nav-tabContent" style="" >

          <!-- conteudo do botao consulta auto --> 
            <div class="tab-pane fade show active" id="nav-home2" role="tabpanel" aria-labelledby="nav-home-tab2">
              
            

               
                    <ul class="nav mb-3" id="pills-tab" role="tablist" style="display: block; width: 60%">

                          <li class="nav-item">
                            <a class="nav-link active scrollSuave" id="pills-home-tab" data-toggle="pill" href="#contact" role="tab" aria-controls="pills-home" aria-selected="true">Auto Completa</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Auto Perícia</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Auto Perícia Basica</a>
                          </li>
                           <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab2" data-toggle="pill" href="#pills-contact2" role="tab" aria-controls="pills-contact" aria-selected="false">Auto Perícia Plus</a>
                          </li>
                           <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab3" data-toggle="pill" href="#pills-contact3" role="tab" aria-controls="pills-contact" aria-selected="false">Auto Bn = Leilão</a>
                          </li>
                           <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab4" data-toggle="pill" href="#pills-contact4" role="tab" aria-controls="pills-contact" aria-selected="false">Auto Base Bin</a>
                          </li>
                           <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab5" data-toggle="pill" href="#pills-contact5" role="tab" aria-controls="pills-contact" aria-selected="false">Auto Total</a>
                          </li>
                        
                        </ul>

                        <div class="tab-content" id="pills-tabContent">

                          <div class="tab-pane fade show active" id="contact" role="tabpanel" aria-labelledby="pills-home-tab">
                            <p class="textos">
                              Bin com histórico de roubo e furto
                              |  Histórico de roubo e furto | Base estadual com débitos | Proprietário anterior e atual |  SSP – restrições
                              estaduais |  Gravame |  Restrições denatran |  Recall |  Restrições renajud – judicial |   Comunicado de venda |
                              Restrições renainf – multas de outros estados |  Decodificador de chassi |  Código fipe |  Leilão I |  Leilão II |
                              Oferta de leilão sem edital |  Histórico de avaria (se o veículo passou em alguma oficina credenciando por seguradora).
                              |  Cotações de seguros |  Sinistro |  Indício de sinistro |  Registro de acidente |  Ação trabalhista |  Pendências
                              financeiras |  Protesto em cartório |  SPC |  Serasa nacional |  Cheque sem fundo |  Quadro societário |  Empresa no
                              nome do proprietário do veículo consultado |  Situação cadastral na receita federal |  Óbito |  Localização |  Endereço
                              |  Telefone |  E-mail |
                          </p>
                          <p>
                            <button type="button" class="btn btn-outline-success btnpreco" style="width: 100%">
                             
                                <img src="img/preco.png" style="width: 50%">
                              
                            </button>
                            <a href="<?=$urlBase?>cadastro" ><button type="button" class="btn btn-success btncompra" style="width: 100%">Comprar</button></a>
                          </p>
                          </div>

                          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <p class="textos">
                              Bin com histórico de roubo e furto | Histórico de roubo e furto | Base estadual com débitos | Proprietário anterior e atual | SSP – restrições estaduais | Gravame | Restrições denatran | 
                            Recall | Restrições renajud – judicial | Comunicado de venda | Restrições renainf – multas de outros estados | Decodificador de chassi | Código fipe | Leilão I | Leilão II | Oferta de leilão sem edital | Histórico de avaria (se o veículo passou em alguma oficina credencianda por seguradora). | Sinistro | Indício de sinistro | Ação trabalhista | Empresa no nome do proprietário do veículo consultado
                            </p>
                          <p>
                            <button type="button" class="btn btn-outline-success btnpreco" style="width: 100%;">
                              
                                <img src="img/preco28.png" style="width: 50%">
                              
                            </button>
                            <a href="<?=$urlBase?>cadastro"><button type="button" class="btn btn-success btncompra" style="width: 100%">Comprar</button></a>
                          </p>
                          </div>

                          <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <p class="textos">
                              
                          </p>
                          <p class="textos">
                            <button type="button" class="btn btn-outline-success btnpreco" style="width: 100%">
                              
                                <img src="img/preco21,50.png" style="width: 50%">
                             
                            </button><a href="<?=$urlBase?>cadastro"><button type="button" class="btn btn-success btncompra" style="width: 100%">Comprar</button></a>
                          </p>
                          </div>

                          <div class="tab-pane fade" id="pills-contact2" role="tabpanel" aria-labelledby="pills-contact-tab2">
                            <p class="textos">
                              Bin Com Histórico De Roubo E Furto | Histórico De Roubo E Furto | Proprietário Anterior E Atual | Ssp – Restrições Estaduais | Decodificador De Chassi | Código Fipe | Leilão I | Leilão Ii | Oferta De Leilão Sem Edital
                          </p>
                          <p>
                            <!-- <button type="button" class="btn btn-outline-success btnpreco" style="width: 100%">
                              
                                <img src="img/preco.png" style="width: 50%">
                              
                            </button> -->
                            <a href="<?=$urlBase?>cadastro"><button type="button" class="btn btn-success btncompra" style="width: 100%">Comprar</button></a>
                          </p>
                          </div>

                          <div class="tab-pane fade" id="pills-contact3" role="tabpanel" aria-labelledby="pills-contact-tab3">
                            <p class="textos">
                               Bin Com Histórico De Roubo E Furto | Histórico De Roubo E Furto | Leilão I | Leilão II | Oferta De Leilão Sem Edital
                          </p>
                          <p>
                            <button type="button" class="btn btn-outline-success btnpreco" style="width: 100%">
                              
                                <img src="img/preco16,50.png" style="width: 50%">
                              
                            </button>
                            <a href="<?=$urlBase?>cadastro"><button type="button" class="btn btn-success btncompra" style="width: 100%">Comprar</button></a>
                          </p>
                          </div>

                          <div class="tab-pane fade" id="pills-contact4" role="tabpanel" aria-labelledby="pills-contact-tab4">
                            <p class="textos">
                              
                          </p>
                          <p>
                            <button type="button" class="btn btn-outline-success btnpreco" style="width: 100%">
                              
                                <img src="img/preco07,50.png" style="width: 50%">
                              
                            </button>
                            <a href="<?=$urlBase?>cadastro"><button type="button" class="btn btn-success btncompra" style="width: 100%">Comprar</button></a>
                          </p>
                          </div>

                          <div class="tab-pane fade" id="pills-contact5" role="tabpanel" aria-labelledby="pills-contact-tab5">
                            <p class="textos">
                               Pessoa Física: Nome, CPF, Data de Nascimento, Situação do CPF, Nome da mãe, Origem do CPF, Sexo, Grau de Instrução, Endereços, Telefones, Grafias, Participação em  empresas, SCORE DE CRÉDITO, Restrições Financeiras, Protestos, Cheques devolvidos, Recuperação, Falência, Ações Judiciais.
                             | Pessoa Jurídica: Razão Social, CNPJ, Data de Fundação, Data de Encerramento, NIRE, Situação CNPJ, Data situação, Sintegra, Natureza Jurídica, Filiais, CNAE, Faturamento Presumido, Faixa, Faturamento Anual, quantidade de consultas, cheques devolvidos, quadro de sócios, Participação em Empresas, Restrições Financeiras, Comportamento de
                            pagamento, endereço completo, telefones, SCORE, probabilidade de
                            inadimplência,Protestos, Ações Judiciais e Falência.
                          </p>
                          <p>
                            <!-- <button type="button" class="btn btn-outline-success btnpreco" style="width: 100%">
                             
                                <img src="img/preco.png" style="width: 50%">
                              
                            </button> -->
                            <!-- <a href="cadastro.php"><button type="button" class="btn btn-success btncompra" style="width: 100%">Comprar</button></a>  -->  
                          </p>
                          </div>
                          
                        </div>
                    
            </div> 
            <!-- fim do botao consulta auto -->
            

            
            <div class="tab-pane fade" id="nav-profile2" role="tabpanel" aria-labelledby="nav-profile-tab3">

            

                      
              
                    <ul class="nav mb-3" id="pills-tab" role="tablist" style="display: block; width: 70%">

                          <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab5" data-toggle="pill" href="#pills-home5" role="tab" aria-controls="pills-home" aria-selected="true">Auto Mix Completa CNPJ</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab6" data-toggle="pill" href="#pills-profile6" role="tab" aria-controls="pills-profile" aria-selected="false">Auto Mix Completa CPF</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab7" data-toggle="pill" href="#pills-contact7" role="tab" aria-controls="pills-contact" aria-selected="false">Localização</a>
                          </li>
                           <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab8" data-toggle="pill" href="#pills-contact8" role="tab" aria-controls="pills-contact" aria-selected="false">Negativação de Devedores</a>
                          </li>
                           <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab9" data-toggle="pill" href="#pills-contact9" role="tab" aria-controls="pills-contact" aria-selected="false">Lista Telefonica ONNL</a>
                          </li>
                           <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab10" data-toggle="pill" href="#pills-contact10" role="tab" aria-controls="pills-contact" aria-selected="false">Consfirma Telefone Bin</a>
                          </li>
                           <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab11" data-toggle="pill" href="#pills-contact11" role="tab" aria-controls="pills-contact" aria-selected="false">Localização Plus</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab12" data-toggle="pill" href="#pills-contact12" role="tab" aria-controls="pills-contact" aria-selected="false">Cheque Plus</a>
                          </li>
                           <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab13" data-toggle="pill" href="#pills-contact13" role="tab" aria-controls="pills-contact" aria-selected="false">Score</a>
                          </li>
                           <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab14" data-toggle="pill" href="#pills-contact14" role="tab" aria-controls="pills-contact" aria-selected="false">Cred Mix</a>
                          </li>

                        
                        </ul>

                        <div class="tab-content" id="pills-tabContent">

                          <div class="tab-pane fade show active" id="pills-home5" role="tabpanel" aria-labelledby="pills-home-tab5">
                            <p class="textos">
                              Pendências Financeiras | Protesto Em Cartório | SPC | Serasa Nacional | Cheque Sem Fundo | Quadro Societário | Empresa No Nome Do Proprietário Do Veículo Consultado | Situação Cadastral Na Receita Federal | Óbito | Situação Síntegra | Localização | Endereço | Telefone | E-mail |
                          </p>
                          <p>
                            <button type="button" class="btn btn-outline-success btnpreco" style="width: 100%">
                              <img src="img/preco06,50.png" style="width: 50%">
                            </button>
                            <a href="<?=$urlBase?>cadastro"><button type="button" class="btn btn-success btncompra" style="width: 100%">Comprar</button></a>
                          </p>
                          </div>

                          <div class="tab-pane fade" id="pills-profile6" role="tabpanel" aria-labelledby="pills-profile-tab6">
                            <p class="textos">
                             Pendências Financeiras | Protesto Em Cartório | Spc | Serasa Nacional | Cheque Sem Fundo |
                            Protestos Ieptb | Quadro Societário | Empresa No Nome Do Proprietário Do Veículo Consultado |
                            Situação Síntegra | Localização | Endereço | Telefone | E-mail
                            </p>
                          <p>
                            <button type="button" class="btn btn-outline-success btnpreco" style="width: 100%">
                              <img src="img/preco06,50.png" style="width: 50%">
                            </button>
                            <a href="<?=$urlBase?>cadastro"><button type="button" class="btn btn-success btncompra" style="width: 100%">Comprar</button></a>
                          </p>
                          </div>

                          <div class="tab-pane fade" id="pills-contact7" role="tabpanel" aria-labelledby="pills-contact-tab7">
                            <p class="textos">
                              Endereço | Telefone | E-mail
                          </p>
                          <p>
                            <button type="button" class="btn btn-outline-success btnpreco" style="width: 100%">
                              <img src="img/preco02,50.png" style="width: 50%">
                            </button>
                            <a href="<?=$urlBase?>cadastro"><button type="button" class="btn btn-success btncompra" style="width: 100%">Comprar</button></a>
                          </p>
                          </div>

                          <div class="tab-pane fade" id="pills-contact8" role="tabpanel" aria-labelledby="pills-contact-tab8">
                            <p class="textos">
                              Nesta consulta o cliente negativa seus devedores a nível nacional.
                          </p>
                          <p>
                            <button type="button" class="btn btn-outline-success btnpreco" style="width: 100%">
                              <img src="img/preco07,80.png" style="width: 50%">
                            </button>
                            <a href="<?=$urlBase?>cadastro"><button type="button" class="btn btn-success btncompra" style="width: 100%">Comprar</button></a>
                          </p>
                          </div>

                          <div class="tab-pane fade" id="pills-contact9" role="tabpanel" aria-labelledby="pills-contact-tab9">
                            <p class="textos">
                              Telefones e endereços atualizados em tempo real com operadoras de telefonia fixa. CONSULTA CPF/CNPJ
                          </p>
                          <!-- <p>
                            <button type="button" class="btn btn-outline-success btnpreco" style="width: 100%">
                              <img src="img/preco.png" style="width: 50%">
                            </button>
                            <a href="cadastro.php"><button type="button" class="btn btn-success btncompra" style="width: 100%">Comprar</button></a>
                          </p> -->
                          </div>

                          <div class="tab-pane fade" id="pills-contact10" role="tabpanel" aria-labelledby="pills-contact-tab10">
                            <p class="textos">
                              Telefones e endereços atualizados em tempo real com operadoras de telefonia fixa.
                          </p>
                         <!--  <p>
                            <button type="button" class="btn btn-outline-success btnpreco" style="width: 100%">
                              <img src="img/preco2.png" style="width: 50%">
                            </button>
                            <a href="cadastro.php"><button type="button" class="btn btn-success btncompra" style="width: 100%">Comprar</button></a>
                          </p> -->
                          </div>

                          <div class="tab-pane fade" id="pills-contact11" role="tabpanel" aria-labelledby="pills-contact-tab11">
                            <p class="textos">
                              <strong>Pessoa Física:</strong> Nome, nome da mãe, data de nascimento, sexo, nome do cônjuge, e-mail, perfil profissional, renda presumida, escolaridade, ocupação, se possui veículo,endereços associados, telefones associados, pessoas no mesmo endereço.<br>
                            <strong>Pessoa Jurídica:</strong> Razão Social, data da abertura, status, nome fantasia, emails, CNAES, capital social, porte, faturamento presumido, quantidade de proprietários, quantidade de funcionários, endereços associados, telefones associados.
                          </p>
                          <!-- <p>
                            <button type="button" class="btn btn-outline-success btnpreco" style="width: 100%">
                              <img src="img/preco2.png" style="width: 50%">
                            </button>
                            <a href="cadastro.php"><button type="button" class="btn btn-success btncompra" style="width: 100%">Comprar</button></a>
                          </p> -->
                          </div>

                          <div class="tab-pane fade" id="pills-contact12" role="tabpanel" aria-labelledby="pills-contact-tab12">
                            <p class="textos">
                              Confirmação de dados cadastrais, confirmação bancária: endereço, telefone e fax da Agência. Cheque sem Fundo CCF BC, Recheque, informação de cheques Sustados, Extraviados, Roubados , Cancelados e bloqueados, Recheque online, confirmação dados da conta corrente / titularidade mais status da conta corrente: Ativa, Inativa, Suspensa ou Encerrada*, pendências no comércio, Confirmação de Telefone e Endereço, últimos cinco telefones consultados e confirmação do CEP.
                          </p>
                          <!-- <p>
                            <button type="button" class="btn btn-outline-success btnpreco" style="width: 100%">
                              <img src="img/preco3.png" style="width: 50%">
                            </button>
                            <a href="cadastro.php"><button type="button" class="btn btn-success btncompra" style="width: 100%">Comprar</button></a>
                          </p> -->
                          </div>

                          <div class="tab-pane fade" id="pills-contact13" role="tabpanel" aria-labelledby="pills-contact-tab13">
                            <p class="textos">
                             Pessoa Física: Confirma nome, data de nascimento, CCF (Cadastro cheque sem fundo), Cheque Lojista (cheque registrado pela empresa), Cheque Sustado quando informado no ato da consulta, Contumácia da Alínea 21, Contraordem, Cheque roubado, Registro Bancos, financeiras, Cartão Crédito, Companhia Telefônica, Atacado, Indústria, Comercio
                            Varejista, Consultas Realizadas (últimos 90 dias), Confirma Fone (localiza telefone pelo CPF ou através do número fixo confirma endereço de instalação), score de 6 meses.
                          </p>
                          <!-- <p>
                            <button type="button" class="btn btn-outline-success btnpreco" style="width: 100%">
                              <img src="img/preco.png" style="width: 50%">
                            </button>
                            <a href="cadastro.php"><button type="button" class="btn btn-success btncompra" style="width: 100%">Comprar</button></a>
                          </p> -->
                          </div>

                          <div class="tab-pane fade" id="pills-contact14" role="tabpanel" aria-labelledby="pills-contact-tab14">
                            <p class="textos">
                             <strong>Pessoa Física:</strong> Confirmação de dados cadastrais, Cheque sem Fundo CCF BC, Pendências financeiras, dívidas de Leasing, Cartões de Crédito, Refinanciamento de Dívidas, pendências de Varejo, Notas Promissórias, Duplicatas, Registrados na SERASA e no SPC Brasil.<br>
                             <strong>Pessoa Jurídica:</strong>  Confirmação de dados cadastrais, Cheque sem Fundo CCF BC, Pendências financeiras, dívidas de Leasing, Cartões de Crédito, Refinanciamento de Dívidas, pendências de Varejo, Notas Promissórias, Duplicatas, Registrados na SERASA e no SPC Brasil.
                          </p>
                          <!-- <p>
                            <button type="button" class="btn btn-outline-success btnpreco" style="width: 100%">
                              <img src="img/preco.png" style="width: 50%">
                            </button>
                            <a href="cadastro.php"><button type="button" class="btn btn-success btncompra" style="width: 100%">Comprar</button></a>
                          </p> -->
                          </div>
                          
                        </div>
                    </div>
                    <!-- fim consulta auto celular -->

            </div> <!-- fim do botao consulta credito -->
         </div>   
