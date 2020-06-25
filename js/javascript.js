
/*divs de troca da pagina como consultar*/
function number1() {
	var car = document.getElementById('ConsultaTroca').innerHTML;
	car = '<div class="divicon"><img src="img/placa.png" class="iconcomo"></div>';
	car = car + '<p class="trocacomo">Realize a consulta completa</p></div>';
	document.getElementById('ConsultaTroca').innerHTML = car;
}

function number2() {
	var car = document.getElementById('ConsultaTroca').innerHTML;
	car = '<div class="divicon"><img src="img/icon2como2.png" class="iconcomo"></div>';
	car = car + '<p class="trocacomo">Verifique os dados <br> inicias do veículo</p></div>';
	document.getElementById('ConsultaTroca').innerHTML = car;
}

function number3() {
	var empresa = document.getElementById('ConsultaTroca').innerHTML;	
	empresa = '<div class="divicon"><img src="img/icon3como2.png" class="iconcomo"></div>';
	empresa = empresa + '<p class="trocacomo">Faça login</p></div>';
	document.getElementById('ConsultaTroca').innerHTML = empresa;
}

function number4() {
	var empresa = document.getElementById('ConsultaTroca').innerHTML;
	empresa = '<div class="divicon"><img src="img/relogio2.png" class="iconcomo"></div>';
	empresa = empresa + '<p class="trocacomo">Ganhe tempo</p></div>';
	document.getElementById('ConsultaTroca').innerHTML = empresa;
}



/*divs de troca da pagina home*/
function cpf() {
	var mascara = document.getElementById('troca').innerHTML;	
	mascara = '<p class="links" id="troca" id="fundo">Digite o CPF</p>';
 //    mascara = mascara + '<input type="hidden" name="tipo" id="tipo" value="cpf"><input type="text" placeholder="cpf" name="valor" id="valor" required=""/ class="entrada"><p><button type="button" class="btn btn-light links">CONSULTAR</button></p>';
	document.getElementById('troca').innerHTML = mascara;

	// var btn = document.getElementById('troca2').innerHTML;
	// btn = '<p><button id="ClickCPF" type="button" class="btn btn-light links" onclick="cpf()">Consulta CPF</button><br>';
	// btn = btn + '<button id="ClickCNPJ" type="button" class="btn btn-light links" onclick="cnpj()">Consulta CNPJ</button><br>';
	// btn = btn + '<button id="ClickAuto" type="button" class="btn btn-light links" onclick="auto()">Consulta Auto</button></p>';
	// document.getElementById('troca2').innerHTML = btn;

	var titulo = document.getElementById('troca3').innerHTML;	
	titulo = '<p class="titulo d-none d-md-block">Consulta CPF</p><p class="titulomob d-block d-sm-none">Consulta <br>CPF</p>';
	document.getElementById('troca3').innerHTML = titulo;

	var img = document.getElementById('troca4').innerHTML;
    img = '<div id="troca4" class="d-none d-md-block"><img src="img/cab2.png" style="position: absolute; left: 0px; height: 100%; background-size: cover; width: 100%; top:0px;"></div>';
	document.getElementById('troca4').innerHTML = img;

	var img2 = document.getElementById('troca5').innerHTML;
		img2 = '<div id="troca5" class="d-block d-sm-none"><img src="img/bg2.png" style="position: absolute; left: 0px; top:0px; width: 100%; height: 700px"></div> ';
	document.getElementById('troca5').innerHTML = img2;


}

function cnpj2() {
	var mascara = document.getElementById('troca').innerHTML;
	mascara = '<p class="links" id="troca">Digite o CNPJ</p>';
	//     mascara = mascara + '<input type="text" placeholder="cnn" name="valor" id="valor" required=""/ class="entrada"><p><button type="button" class="btn btn-light links">CONSULTAR</button></p>';

	document.getElementById('troca').innerHTML = mascara;

	// var btn = document.getElementById('troca2').innerHTML;
	// btn = '<p><button id="ClickCPF" type="button" class="btn btn-light links" onclick="cpf()">Consulta CPF</button><br>';
	// btn = btn + '<button id="ClickCNPJ" type="button" class="btn btn-light links" onclick="cnpj()">Consulta CNPJ</button><br>';
	// btn = btn + '<button id="ClickAuto" type="button" class="btn btn-light links" onclick="auto()">Consulta Auto</button></p>';
	// document.getElementById('troca2').innerHTML = btn;

	var titulo = document.getElementById('troca3').innerHTML;	
	titulo = '<p class="titulo d-none d-md-block">Consulta CNPJ</p><p class="titulomob d-block d-sm-none">Consulta <br>CNPJ</p>';
	document.getElementById('troca3').innerHTML = titulo;

	var img = document.getElementById('troca4').innerHTML;	
	img = '<img src="img/cab3.png" style="width: 100%; position: absolute; left: 0px; height: 100%; top:0px;">';
	document.getElementById('troca4').innerHTML = img;

	var img2 = document.getElementById('troca5').innerHTML;
		img2 = '<div id="troca5" class="d-block d-sm-none"><img src="img/bg3.png" style="position: absolute; left: 0px; width: 100%; height: 700px; top:0px;"></div> ';
	document.getElementById('troca5').innerHTML = img2;
}

function auto() {
	var mascara = document.getElementById('troca').innerHTML;
	mascara = '<p class="links"id="troca">Digite a Placa</p>';
 //    mascara = mascara + '<input type="hidden" name="tipo" id="tipo" value="placa"><input type="text" placeholder="auto" name="valor" id="valor" required=""/ class="entrada"><p><button type="button" class="btn btn-light links">CONSULTAR</button></p>';
	document.getElementById('troca').innerHTML = mascara;

	// var btn = document.getElementById('troca2').innerHTML;
	// btn = '<p><button id="ClickCPF" type="button" class="btn btn-light links" onclick="cpf()">Consulta CPF</button><br>';
	// btn = btn + '<button id="ClickCNPJ" type="button" class="btn btn-light links" onclick="cnpj()">Consulta CNPJ</button><br>';
	// btn = btn + '<button id="ClickAuto" type="button" class="btn btn-light links" onclick="auto()">Consulta Auto</button></p>';
	// document.getElementById('troca2').innerHTML = btn;

	var titulo = document.getElementById('troca3').innerHTML;	
	titulo = '<p class="titulo d-none d-md-block">Consulta Veicular</p><p class="titulomob d-block d-sm-none">Consulta <br>Veicular</p>';
	document.getElementById('troca3').innerHTML = titulo;

	var img = document.getElementById('troca4').innerHTML;	
	img = '<img src="img/cab1.png" style="width: 100%; position: absolute; left: 0px; height: 100%; top:0px;">';
	document.getElementById('troca4').innerHTML = img;

	var img2 = document.getElementById('troca5').innerHTML;
		img2 = '<div id="troca5" class="d-block d-sm-none"><img src="img/bg1.png" style="position: absolute; left: 0px; width: 100%; height: 700px; top:0px;"></div> ';
	document.getElementById('troca5').innerHTML = img2;
}


// botoes auto e credito
function btnauto() {

	var mascara = document.getElementById('nav-tab').innerHTML;
	mascara = '<div class="nav nav-tabs" id="nav-tab" role="tablist" style="width: 100%; margin:auto auto; " >';
	mascara = mascara + '<a style="width: 50%; background-color: #e7b141" onclick="btnauto()" class="nav-item nav-link btnauto" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">';
	mascara = mascara + '<img src="img/btnauto.png" class="d-none d-md-block" style="margin: 20px auto 10px auto; width: 30%">';
	mascara = mascara + ' <p style="font-family: Raleway, sans-serif; font-size: 1.5em; color: #ffff">Consultas<br><strong style="font-family: Raleway, sans-serif; color: #ffff; font-weight: 800;">AUTO</strong></p></a>';

	mascara = mascara + '<a style="width: 50%; background-color: #ffff" onclick="btncredito()" class="nav-item nav-link btnauto" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">';
	mascara = mascara + '<img src="img/btncredito2.png" class="d-none d-md-block" style="margin: 20px auto 10px auto; width: 30%">';
	mascara = mascara + '<p style="font-family: Raleway, sans-serif; font-size: 1.5em; color: #606060">Consultas<br><strong style="font-family: Raleway, sans-serif; color: #606060; font-weight: 800;">CRÉDITO</strong></p></a></div>';
	document.getElementById('nav-tab').innerHTML = mascara;	
}

function btncredito() {

	var mascara = document.getElementById('nav-tab').innerHTML;
	mascara = '<div class="nav nav-tabs" id="nav-tab" role="tablist" style="width: 100%; margin:auto auto; " >';
	mascara = mascara + '<a style="width: 50%; background-color: #ffff" onclick="btnauto()" class="nav-item nav-link btnauto" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">';
	mascara = mascara + '<img src="img/btnauto2.png" class="d-none d-md-block" style="margin: 20px auto 10px auto; width: 30%">';
	mascara = mascara + ' <p style="font-family: Raleway, sans-serif; font-size: 1.5em; color: #606060">Consultas<br><strong style="font-family: Raleway, sans-serif; color: #606060; font-weight: 800;">AUTO</strong></p></a>';

	mascara = mascara + '<a style="width: 50%; background-color: #e7b141" onclick="btncredito()" class="nav-item nav-link btnauto" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">';
	mascara = mascara + '<img src="img/btncredito.png" class="d-none d-md-block" style="margin: 20px auto 10px auto; width: 30%">';
	mascara = mascara + '<span style="color: #ffff; font-family: Raleway, sans-serif; font-size: 1.5em; #ffff">Consultas<br><strong style="font-family: Raleway, sans-serif; color: #ffff; font-weight:800;">CRÉDITO</strong></span></a></div>';
	document.getElementById('nav-tab').innerHTML = mascara;	
}








function btnauto_mob() {

	var mascara = document.getElementById('imgauto').innerHTML;
	mascara = '<img src="img/btnauto.png" style="width: 100%;" id="imgauto">';

	mascara = mascara + '<img src="img/btncredito2.png" style="width: 100%" id="imgcredito">';
	document.getElementById('imgauto').innerHTML = mascara;	
}

function btncredito_mob() {

	var mascara = document.getElementById('imgcredito').innerHTML;
	mascara = '<img src="img/btnauto2.png" style="width: 100%;" id="imgauto">';

	mascara = mascara + '<img src="img/btncredito.png" style="width: 100%" id="imgcredito">';

	document.getElementById('imgcredito').innerHTML = mascara;	

}





// function btnauto() {
// 	var mascara = document.getElementById('tt').innerHTML;
// 	mascara = '<div id="tt"><img src="img/btnauto.png"><p>Consultas<br>AUTO</p></div>';
	
// 	document.getElementById('tt').innerHTML = mascara;	
// }






// function btnauto() {
// 	var mascara = document.getElementById('tt').innerHTML;
// 	mascara = '<nav class="btnconsultas" id="tt">';
// 	mascara = mascara +'<div class="nav nav-tabs" id="nav-tab" role="tablist" style="width: 100%; margin:auto auto;" >';
// 	mascara = mascara + '<a style="width: 50%; background-color: green;" class="nav-item nav-link active btnauto" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true" onclick="btnauto()"><img src="img/btnauto.png"><p>Consultas<br>Auto</p></a>';
// 	mascara = mascara + '<a style="width: 50%; background-color: red" class="nav-item nav-link btnauto" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false" onclick="btncredito()"><img src="img/btncredito2.png"><p>Consulas<br>Crédito</p></a>';
// 	mascara = mascara + ' </div>';
// 	mascara = mascara + ' </nav>';
// 	document.getElementById('tt').innerHTML = mascara;	
// }



// var $doc = $('html, body');
// $('a').click(function() {
//     $doc.animate({
//         scrollTop: $( $.attr(this, 'href') ).offset().top
//     }, 500);
//     return false;
// });
                         