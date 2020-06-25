
	<div  id="comofunciona" style="margin-bottom: 2px;"></div>
	<div class="container-fluid principalcomo">
		<div class="container container2 d-none d-md-block" >
			<div class="row" style=" height: 150px">
				<div class="col-sm-6">
					<h1 style="color:#ffff;font-family: 'Raleway', sans-serif;">Como <br> realizar <br> uma <br> consulta</h1>
				</div>
				<div class="col-sm-6 colsnumber linhanumber">
					
						<a href="" class="btnnumber"><div class="row" style=" height: 150px;" onmouseover="number1()">
							<strong class="numb">1</strong><p class="numbtext"> Digite a placa <br> do veículo e <br> clique em consultar
                		</p>
                		</div></a>
                	
				</div>
			</div>
			<div class="row " >
				<div class="col-sm-6">
					
				</div>
				<div class="col-sm-6 colsnumber linhanumber linhaborda" style="border-top: 1px solid white; height: 100%">
					
						<a href="" class="btnnumber"><div class="row" onmouseover="number2()" style=" height: 150px;">
							<strong class="numb">2</strong><p class="numbtext">Confirme os <br> dados do <br> veículo</p>
						</div></a>
					
				</div>
			</div>

			<!-- div que faz a troca -->
			<div class="row" style="height: 150px">
				<div class="col-sm-6" id="ConsultaTroca" style="">
					
				          <div class="divicon">
				           <img src="img/placa.png" class="iconcomo">
				          </div>
				          
				          <p class="trocacomo">
				            Realize a consulta completa.
				          </p>
        			
				</div>
				<div class="col-sm-6 colsnumber linhanumber" style="border-top: 1px solid white; height: 100%">

						<a href="" class="btnnumber"><div class="row" onmouseover="number3()" style=" height: 150px;">
							<strong class="numb">3</strong><p class="numbtext">Adquira seu <br> plano e <br> cadastre-se</p>
						</div></a>
								
				</div>
			</div>
			<div class="row" style="height: 150px">
				<div class="col-sm-6 linhanumber" style="margin-top: 50px">
					<a href="<?=$urlBase?>cadastro" class="btnnumber"> 
					<table>
						<tr><td rowspan="2">
					
					
						<img src="img/setalink.png"></td></tr><tr><td>
						<p class="etapas" style="color:#ffff; margin-top: 15px; margin-left: 15px">	Agora que conhece as etapas, realize uma consulta
						</p>
					</td></tr></table>	</a>
				</div>
				<div class="col-sm-6 colsnumber numbcol linhanumber" style="border-top: 1px solid white; height: 100%">

					<a href="" class="btnnumber"><div class="row" onmouseover="number4()" style="height: 150px;">
							<strong class="numb">4</strong><p class="numbtext">Seu relatório <br> em poucos <br> segundos</p>
					</div></a>		
				</div>
			</div>
		</div>

		<!-- corousel para mobile -->
		<h1 class="d-block d-sm-none " style="color:#ffff;font-family: 'Raleway', sans-serif;">Como <br> realizar <br> uma <br> consulta</h1>
		<div id="carouselExampleFade" class="carousel slide carousel-fade d-block d-sm-none" data-ride="carousel">
			  <div class="carousel-inner">
			    <div class="carousel-item active meucarosel">
			      
			      <div class="carousel-caption">
					    <h1 class="numbermob">1</h1>
					    <p class="numbtext">Digite a placa do veículo e clique em consultar</p>
			      </div>
			      <img class="d-block w-100" src="img/placa.png" alt="">
			  </div>
			    <div class="carousel-item meucarosel">
			      <img class="d-block w-100" src="img/icon2como.png" alt="">
			      <div class="carousel-caption">
					    <h1>2</h1>
					    <p class="numbtext">Confirme os dados do veículo</p>
			      </div>
			    </div>
			    <div class="carousel-item meucarosel">
			      <img class="d-block w-100" src="img/icon3como.png" alt="">
			      <div class="carousel-caption">
					    <h1 class="numbermob">3</h1>
					    <p class="numbtext">Adquira seu plano e cadastre-se</p>
			      </div>
			    </div>
			    <div class="carousel-item meucarosel">
			      <img class="d-block w-100" src="img/relogio.png" alt="">
			      <div class="carousel-caption">
					    <h1 class="numbermob">4</h1>
					    <p class="numbtext">Seu relatório em poucos segundos</p>
			      </div>
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Anterior</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only" >Próximo</span>
			  </a>
		</div><!-- fim do carousel -->

		<div class="row d-block d-sm-none">
			<!-- <a href="cadastro.php"><img src="img/setalink.png" style="width: 81px;height: 59px; margin-right: 10px"><p style="width: 60%; float: right; color: #ffff">Agora que conhece as etapas, realize uma consulta</p></a> -->

<a href="<?=$urlBase?>cadastro" class="btnnumber"> 
					<table>
						<tr><td rowspan="2">
					
					
						<img src="img/setalink.png"></td></tr><tr><td>
						<p class="etapas" style="color:#ffff; margin-top: 15px; margin-left: 5px">	Agora que conhece as etapas, realize uma consulta
						</p>
					</td></tr></table>	</a>
			
		</div>

	</div> 
