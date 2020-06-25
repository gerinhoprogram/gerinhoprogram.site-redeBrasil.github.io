<?php include("header.php") ?>
<style type="text/css">

  /*sem borda no input*/
      textarea:focus,
      input:focus,
      select:focus {
      border-color: none !important;
      outline: 0;
      -webkit-box-shadow: none !important;
      box-shadow: none !important;
      }
      .mm::-webkit-input-placeholder{
            color: #ffff;
        }
        .mm: input-placeholder{
            color: #ffff;
        }
</style>

   <!--  <img src="img/cab1.png" class="d-block d-sm-none" style="position: absolute; top: 0px; width: 100vw;"> -->
 <div class="d-block d-sm-none" style=" background-image: url(img/cab1.png); background-size: cover; height: 500px; pos"></div>
      <div class="container-fluid fadeImg fadeImg-delay" style=" z-index: 999" id="fundo">
       
    
      <div style="height: 250px" class="d-none d-md-block"></div>
      <div style="height: 150px" class="d-block d-sm-none"></div>

        <div class="row"> <!-- linha central -->
           <div class="col-sm-3 d-none d-md-block" style="margin-top: 3%"><hr style="margin-left: -15px"></div>
                      <div class="col-sm-6 colcentral " id="troca3">
                       <p class="titulo d-none d-md-block">Consulta Veicular</p>                 
                       <p class="titulomob d-block d-sm-none">Consulta <br> Veicular</p>
                      </div> 
           <div class="col-sm-3 d-none d-md-block" style="margin-top: 3%"><hr style="margin-right: -15px"></div>
                                       
        </div> <!-- fim da linha central -->

        <div class="row linhabaixa">

                       
                      <div class="col-sm-6">
                              <p class="links" id="troca" style="">Digite a placa</p>
                              <input type="hidden" name="tipo" id="tipo" value="placa">
                              <input type="text" placeholder="___-____" name="valor" id="valor" required="" class="mascara entrada mm" style="width: 50%; color: #ffffff;border-color: none" />
                              <p>
                                <a href="fale_conosco.php" >
                                  <button type="button" class="btn btn-light links" style="margin-top: 10px; border: #ffff 1px solid; ">
                                  CONSULTAR
                                </button>
                                </a>
                              </p>
                      </div>
                      
                      <div class="col-sm-6" id="troca2">
                          <p>
                            <a href="#" id="ClickAuto" class="links2" onclick="auto()">Consulta Auto</a>
                            <br>
                            <a href="#" id="ClickCPF" class="links2" onclick="cpf()">Consulta CPF</a>
                            <br>
                            <a href="#" id="ClickCNPJ" class="links2" onclick="cnpj2()">Consulta CNPJ</a>   
                          </p>
                      </div>
                      <div class="col-sm-6" style="z-index: 200; margin-top: 50px">
                        <a href="#consultas" style=""><img src="img/ancora.png" style="width: 5%">
                          <span style="font-weight:bold; font-family: 'Raleway', sans-serif; color: #ffff">Saiba mais</span></a>
                        </div>
                     
        </div>       
    </div>
    

   
      <?php include("fazer_consultas.php") ?>
      <?php include("como_consultar.php") ?>
      <?php include("encontrar_consulta.php") ?>
      <?php include("footer.php") ?>





























