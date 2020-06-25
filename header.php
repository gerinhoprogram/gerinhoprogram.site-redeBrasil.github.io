<!DOCTYPE html>
<html lang="pt-br">
  <head>
        <!-- mascara -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>   
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.js"></script>
    <script type="text/javascript">

    $.noConflict();
    jQuery( document ).ready(function( $ ) {

      
      $("#valor").inputmask({mask: 'AAA-9*99'});
      $("#ClickCarro").attr("style", "background-color: #FF6300 !important; border-color: #FF6300");
      

      // codigo de mascara para as paginas internas 
      $("#cep").inputmask({mask: '99999-999'});
      $("#telefone").inputmask({mask: '(99) 9999-99999'});
      $("#cnpj").inputmask({mask: '99.999.999/9999-99'});
      $("#cpf").inputmask({mask: '999.999.999-99'});
      $("#celular").inputmask({mask: '(99) 99999-9999'});
      $("#placa").inputmask({mask: 'AAA-9*99'});


      // codigo para mascara header
      jQuery("#ClickAuto").click(function(){
        $("#valor").inputmask({mask: 'AAA-9*99'});
        $("#tipo").attr("value", "placa");
        $("#valor").attr("placeholder", "___-____");
        $("#valor").attr("style", "color:#ffff");
        $("#auto").attr("style", "color: #ffff; border-color: #ffff"); 
        $("#fundo").attr("style", "background: url(img/cab1.png); height: 700px");     
      });

      jQuery("#ClickCPF").click(function(){
        $("#valor").inputmask({mask: '999.999.999-99'});
        $("#tipo").attr("value", "cpf");
        $("#valor").attr("placeholder", "___.___.___-__");
        $("#valor").attr("style", "color:#ffff");
        $("#cpf").attr("style", "color: #ffff; border-color: #ffff");
        $("#fundo").attr("style", "background: url(img/cab2.png); height: 700px");
       
               
      });
      jQuery("#ClickCNPJ").click(function(){
        $("#valor").inputmask({mask: '99.999.999/9999-99'});
        $("#tipo").attr("value", "cnpj");
         $("#valor").attr("style", "color:#ffff");
        $("#valor").attr("placeholder", "__.___.___/____-__");
       $("#fundo").attr("style", "background: url(img/cab3.png); height: 700px");
        $("#cnpj").attr("style", "color: #ffff; border-color: #ffff");      
      });


      // troca dos botoes de credito e auto da pagina fazer consulta
      jQuery("#credito").click(function(){ 

        $("#credito").attr("style", "; width: 60%; margin: auto auto; background-color: #e7b141");
        $("#auto2").attr("style", " width: 60%; margin: auto auto; background-color: #ffff; border:1px solid #606060 ");

        $("#consultacredito").attr("style", "font-family: 'Raleway', sans-serif; color: #ffff");
        $("#consultaauto").attr("style", "font-family: 'Raleway', sans-serif; color: #606060");

        // $("#removauto").remove();
        $("#imgg").html($("<img>").attr("src", "img/btnauto2.png"));
        $("#imgg2").html($("<img>").attr("src", "img/btncredito.png"));
        // $("#removauto").attr("style", "width: 100%");

        $("#strong").attr("style", "font-family: 'Raleway', sans-serif; color: #606060");
        $("#strong2").attr("style", "font-family: 'Raleway', sans-serif; color: #ffff");
      });


      jQuery("#auto2").click(function(){ 
        $("#credito").attr("style", "; width: 60%; margin: auto auto; background-color: #ffff; border: 2px solid #606060");
        $("#auto2").attr("style", " width: 60%; margin: auto auto; background-color: #e7b141"); 

        $("#consultaauto").attr("style", "font-family: 'Raleway', sans-serif; color: #ffff");
        $("#consultacredito").attr("style", "font-family: 'Raleway', sans-serif; color: #606060");

        $("#imgg").html($("<img>").attr("src", "img/btnauto.png"));
        $("#imgg2").html($("<img>").attr("src", "img/btncredito2.png"));


        $("#strong").attr("style", "font-family: 'Raleway', sans-serif; color: #ffff");
        $("#strong2").attr("style", "font-family: 'Raleway', sans-serif; color: #606060"); 
      });

      // botoes desktop
      jQuery("#nav-profile-tab").click(function(){ 

        $("#nav-profile-tab").attr("style", "; width: 48%; margin: auto auto; background-color: #e7b141; padding-top: 25px; height: 170px; margin-left: 4px");
        $("#nav-home-tab").attr("style", " width: 48%; margin: auto auto; background-color: #ffff; padding-top: 25px; height: 170px; border: 2px solid #606060; margin-right: 4px");

        $("#consultacreditodesk").attr("style", "font-family: 'Raleway', sans-serif; color: #ffffff; font-size: 1.5em; margin-top: 10px");
        $("#consultaautodesk").attr("style", "font-family: 'Raleway', sans-serif; color: #606060; font-size: 1.5em; margin-top: 10px ");

        // $("#removauto").remove();
        $("#imgautodesk").html($("<img>").attr("src", "img/btnauto2.png"));
        

        $("#imgcredesk").html($("<img>").attr("src", "img/btncredito.png"));
        // $("#removauto").attr("style", "width: 100%");

       

        $("#strongdesk").attr("style", "font-family: 'Raleway', sans-serif; color: #606060; font-weight: 800");
        $("#strong2desk").attr("style", "font-family: 'Raleway', sans-serif; color: #ffff; font-weight: 800");
      });


      jQuery("#nav-home-tab").click(function(){ 
        $("#nav-profile-tab").attr("style", "; width: 48%; margin: auto auto; background-color: #ffff; padding-top: 25px; height: 170px; border: 2px solid #606060; margin-left: 4px");
        $("#nav-home-tab").attr("style", " width: 48%; margin: auto auto; background-color: #e7b141; padding-top: 25px; height: 170px; margin-right: 4px"); 

        $("#consultaautodesk").attr("style", "font-family: 'Raleway', sans-serif; font-size: 1.5em; color: #ffff; margin-top: 10px");
        $("#consultacreditodesk").attr("style", "font-family: 'Raleway', sans-serif; font-size: 1.5em; color: #606060; margin-top: 10px");

        $("#imgautodesk").html($("<img>").attr("src", "img/btnauto.png"));
        $("#imgcredesk").html($("<img>").attr("src", "img/btncredito2.png"));

       


       $("#strongdesk").attr("style", "font-family: 'Raleway', sans-serif; color: #ffff; font-weight: 800");
        $("#strong2desk").attr("style", "font-family: 'Raleway', sans-serif; color: #606060; font-weight: 800"); 
      });
     
     


      $("#valorplaca").inputmask({mask: 'AAA-9*99'});
      $("#valorcpf").inputmask({mask: '999.999.999-99'});
      $("#valorcnpj").inputmask({mask: '99.999.999/9999-99'});

      

      $("#termoseleciona").click(function () {
        if($("#termoseleciona").is(':checked')){
            $("#btnPagamento").removeAttr('disabled');
        } else {
            $("#btnPagamento").attr('disabled', 'true');
        }
      }); 
    })
  </script>


    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- fonte do google -->
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css?family=Raleway:800,900&display=swap" rel="stylesheet">

    <!-- meu estilo -->
    <link rel="stylesheet" type="text/css" href="css/meu_estilo.css">
    
    <!-- meu script -->
    <script type="text/javascript" src="js/javascript.js"></script>

    <link rel="shortcut icon" href="favicon.ico">


   
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script type="text/javascript">
    $(window).scroll(function() {    
      var scroll = $(window).scrollTop();
        if (scroll >= 10) {               // se rolar 40px ativa o evento
          $("#menu").addClass("ativo");
           $("#log").addClass("atv");    //coloca a classe "ativo" no id=menu
        } else {
          $("#menu").removeClass("ativo");
          $("#log").removeClass("atv"); //se for menor que 40px retira a classe "ativo" do id=menu
        }
});
  </script>
  

 
    <title></title>

    <style type="text/css">
      .alink:hover{
          text-decoration: none; 
          border-bottom: 0px;
      }
      #menu {
          width: 100%; position: fixed; margin: auto auto; top: 0px;left: 0px; z-index: 999; 
          background-color: rgba(0,0,0,0);
          height: 7%;
          transition: all 500ms linear;
          
        }
        #menu.ativo {
          background-color: rgba(255,255,255,0.9) !important;
          
          height: 10%;
        }

        #log{
          width: 50%;
           transition: all 500ms linear;
        }
        #log.atv{
          width: 80%;
        }
        .menumob{
          background-color: rgba(255,255,255,0.9)
        }
        
    </style>



  </head>
  <body>
    <div class="container-fluid" style="width: 100%;"  id="header"> <!-- div principal -->
            <nav class="navbar navbar-expand-lg navbar-light" style="" id="menu">
                  
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
                    <span class="navbar-toggler-icon" style="text-align: right;"></span>
                  </button>

                 <a class="navbar-brand d-block d-sm-none" href="#" style="margin: auto auto;"><img src="img/logo2.png" style="width: 80%; margin: auto auto;"></a>

                  <div class="collapse navbar-collapse" id="navbarNav" style="">
                    
                     <a class="navbar-brand d-none d-md-block" href="#" style="text-align: right; margin-left: 15%"><img src="img/logo2.png" style="" id="log"></a>

                    <ul class="navbar-nav" style=" margin: auto auto; margin-right: 20%;">
                      <li class="nav-item d-none d-md-block">
                        <a class="nav-link alink" href="index.php">Home</a>
                      </li>
                      <li class="nav-item d-block d-sm-none menumob">
                        <a class="nav-link alink" href="index.php">Home</a>
                      </li>

                      <li class="nav-item d-none d-md-block">
                        <a class="nav-link alink" href="quem_somos.php">Sobre nós</a>
                      </li>
                      <li class="nav-item d-block d-sm-none menumob"> 
                        <a class="nav-link alink" href="quem_somos.php">Sobre nós</a>
                      </li>

                      <li class="nav-item d-none d-md-block">
                        <a class="nav-link alink" href="#consultas">Consultas</a>
                      </li>
                      <li class="nav-item d-block d-sm-none menumob">
                        <a class="nav-link alink" href="#consultas">Consultas</a>
                      </li>

                      <li class="nav-item d-none d-md-block">
                        <a class="nav-link alink" href="#comofunciona">Como funciona</a>
                      </li>
                      <li class="nav-item d-block d-sm-none menumob">
                        <a class="nav-link alink" href="#comofunciona">Como funciona</a>
                      </li>

                      <li class="nav-item d-none d-md-block">
                        <a class="nav-link alink" href="duvidas.php">Dúvidas</a>
                      </li>
                       <li class="nav-item d-block d-sm-none menumob">
                        <a class="nav-link alink" href="duvidas.php">Dúvidas</a>
                      </li>

                      <li class="nav-item d-none d-md-block">
                        <a class="nav-link alink" href="fale_conosco.php">Fale conosco</a>
                      </li>
                      <li class="nav-item d-block d-sm-none menumob">
                        <a class="nav-link alink" href="fale_conosco.php">Fale conosco</a>
                      </li>

                       <li class="nav-item d-none d-md-block">
                        <a class="nav-link alink" href="https://sistema.autocredcar.com.br/sistema/entrar" target="_blank">Entrar</a>
                      </li>
                      <li class="nav-item d-block d-sm-none menumob">
                        <a class="nav-link alink" href="https://sistema.autocredcar.com.br/sistema/entrar" target="_blank">Entrar</a>
                      </li>
                    </ul>
                   
                  </div>
                </nav>


</div>
      <!-- <div class="container-fluid menubottom" style=" background-color: rgb(255,255,255,.9); z-index: 999; top:10px; position: absolute; color:#000000; left: 0px; position: fixed; ">
       
                      <a href="home.php" style="margin: auto auto" class="d-none d-md-block"><img src="img/logo2.png" style="width: 10%; margin-top: 5px; margin-left: 80px"></a>
                      <a href="home.php" style="margin: auto auto" class="d-block d-sm-none"><img src="img/logo2.png" style="width: 40%; margin-top: 5px; margin-left: 20px"></a>
                      <div id='cssmenu' style=" width: 65%; margin: auto auto; margin-top: -30px;">

                        <ul style="width: 110%; margin: auto auto; text-align: left;">
                          
                           <li style=""><a href='home.php' style="color:#000000; font-size: 0.7em">Home</a></li>
                           <li class='active'><a href='quem_somos.php' style="color:#000000; font-size: 0.7em">Sobre nós</a> </li>                
                           <li><a href='#consultas' href='#consultas2' style="color:#000000; font-size: 0.7em">Consultas</a></li> 
                           <li><a href='#comofunciona' style="color:#000000; font-size: 0.7em">Como Funciona</a></li>
                           <li><a href='duvidas.php' style="color:#000000; font-size: 0.7em">Dúvidas</a></li>  
                           <li><a href='fale_conosco.php' style="color:#000000; font-size: 0.7em">Fale conosco</a></li> 
                           <li ><a href="https://sistema.autocredcar.com.br/sistema/entrar" target="_blank" class="btn links btn-light" style="color:#000000; text-align: left; font-size: 0.7em"> Entrar</a></li>            
                        </ul>
                      </div>
        
      </div>
        </div> --> <!-- fim do menu -->
     
   <!--  </div> --> <!-- fim da div principal -->  

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

