<?php

	include_once '../model/Conexao.class.php';
	include_once '../model/Gerenciador.class.php';
	include_once 'dependencias.php';

	$gerenciador = new Gerenciador();

	$id = $_POST['id'];
?>

<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<div class="container">
			<div class="jumbotron" id="photo">
				<form id="form-nota">
					<div class="form-row">
						<div class="col-md-3">
						</div>
						<div class="col-md-9">
							<img src="../assets/img/gac.PNG">
						</div>					
					</div>
					<div class="table-responsive" style="margin-top:2%;">
						<nav class="navbar navbar-dark bg-dark p-0">
							<span class="navbar-brand"><i class="fab fa-whatsapp"></i>(51) 99353-5963 </span>
								<form class="navbar-brand">
									<input class="form-control col-md-2 js-date input-data" type="date" id="data_nota" name="data_nota" required autofocus/>
								</form>
						</nav>
					</div>
					<h3 class="text-center" style="margin-top:1%;"><span class="fa fa-file-alt"></span> Emissão de Nota do Cliente </h3>
					<div class="form-row"> 
						<div class="col-md"> 
							<div class="form-control">
								<label><span class="fa fa-user"></span> Cliente: </label>
								<form class="form-control">
									<?php foreach($gerenciador->getInfo("clientes", $id) as $client_info): ?>
										<input class="form-control" type="text" name="cliente" value="<?=$client_info['nome'].' &nbsp; - &nbsp; '.$client_info['carro'].' &nbsp; - &nbsp; '.$client_info['fone'];?>" readonly/>
										<input type="hidden" id="id_client" value="<?=$client_info['id'];?>"/>
									<?php endforeach; ?>
								</form>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-12"> 
							<div class="form-control">
								<h5 style="margin-top:1%; text-align:center;"> DESCRIÇÃO </h5>
							</div>
						</div>
						<div class="col-md-12">
							<input class="form-control" type="text" style="text-align:center; margin-top:1%;" placeholder="Descrição do(s) problema(s) encontrado(s) / Serviço(s)." disabled/>
							<textarea class="form-control" id="descricao" name="descricao" rows="6" style="resize: none;" required></textarea>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-12"> 
						<div class="form-control">
								<h5 style="margin-top:1%; text-align:center;"> PEÇA(S) / SERVIÇO(S) </h5>
							</div>
						</div>
						<div class="col-md-3" style="margin-top:1%;">
							<input class="form-control" type="text" style="text-align:center;" placeholder="Quantidade" disabled/>
							<input class="form-control" id="qnum1" name="qntde1" type="number" required>
							<input class="form-control" id="qnum2" name="qntde2" type="number">
							<input class="form-control" id="qnum3" name="qntde3" type="number">
							<input class="form-control" id="qnum4" name="qntde4" type="number">
							<input class="form-control" id="qnum5" name="qntde5" type="number">
							<input class="form-control" id="qnum6" name="qntde6" type="number">
							<input class="form-control" id="qnum7" name="qntde7" type="number">
							<input class="form-control" id="qnum8" name="qntde8" type="number">
						</div>
						<div class="col-md-7" style="margin-top:1%;">
							<input class="form-control" type="text" style="text-align:center;" placeholder="Descrição" disabled/>
							<input class="form-control" type="text" id="d1" name="descr1" required>
							<input class="form-control" type="text" id="d2" name="descr2">
							<input class="form-control" type="text" id="d3" name="descr3">
							<input class="form-control" type="text" id="d4" name="descr4">
							<input class="form-control" type="text" id="d5" name="descr5">
							<input class="form-control" type="text" id="d6" name="descr6">
							<input class="form-control" type="text" id="d7" name="descr7">
							<input class="form-control" type="text" id="d8" name="descr8">
						</div>
						<div class="col-md-2" style="margin-top:1%;">
							<input class="form-control" type="text" style="text-align:center;" placeholder="R$" disabled/>
							<input class="form-control" id="vnum1" name="val1" type="number" required>
							<input class="form-control" id="vnum2" name="val2" type="number">
							<input class="form-control" id="vnum3" name="val3" type="number">
							<input class="form-control" id="vnum4" name="val4" type="number">
							<input class="form-control" id="vnum5" name="val5" type="number">
							<input class="form-control" id="vnum6" name="val6" type="number">
							<input class="form-control" id="vnum7" name="val7" type="number">
							<input class="form-control" id="vnum8" name="val8" type="number">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-6">
						</div>
						<div class="col-md-3">
							<input class="form-control" type="text" style="text-align:center;" placeholder="Valor da mão de obra" disabled/>
							<input class="form-control moedaReal" id="maodeobra" name="maodeobra" style="text-align:center; margin-top:1%;" required>
						</div>
						<div class="col-md-3">
							<input class="form-control" type="text" style="text-align:center;" placeholder="TOTAL" disabled/>
							<input class="form-control moedaReal" id="totalvalores" name="totalvalores" style="text-align:center; margin-top:1%;">
							<button class="btn btn-primary" id="total" style="margin-top:3%; width:100%;" onclick="totalValores()"> Calcular </button>	
						</div>
					</div>
					<p style="font-size:12px; text-align:center; margin-top:2%; font-weight: bold;"> OBSERVAÇÃO: ESSE DOCUMENTO NÃO POSSUI VALOR FISCAL.</p>
					<div class="form-row" style="margin-top:5%;">
						<div class="col-md-3"></div>
						<div class="col-md-3">
							<buttont type="button" class="btn btn-secondary" style="width:100%;" id="enviar" onclick="enviar()" > Salvar Nota de Serviço </button>
						</div>
						<div class="col-md-3">
							<button type="button" class="btn btn-success" style="width:100%;" id="download" onclick="capture()"> Download da Nota de Serviço </button>
						</div>
						<div class="col-md-3"></div>
					</div>
					<div style="margin:5% 0 0 0;">
						<a href="clientes" id="voltar"><span class="fa fa-arrow-circle-left"></span>&nbsp voltar</a>
					</div>
				</form>	
			</div>
		</div>
		
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script> 

		<script type="text/javascript">
			
			$('.moedaReal').inputmask('decimal', {
      			radixPoint:",",
      			groupSeparator: ".",
      			autoGroup: true,
      			digits: 2,
      			digitsOptional: false,
      			placeholder: '0',
      			rightAlign: false,
      			onBeforeMask: function (value, opts) {
        			return value;
	        	}
			});
		</script>

		<script type="text/javascript">

		function enviar(){

				$.ajax({
					url: '../controller/inserir_nota.php',
					type: 'post',
					dataType: 'html',
					data: {
						'data_nota': $('#data_nota').val(),
						'descricao': $('#descricao').val(),
						'qntde1': $('#qnum1').val(),
						'qntde2': $('#qnum2').val(),
						'qntde3': $('#qnum3').val(),
						'qntde4': $('#qnum4').val(),
						'qntde5': $('#qnum5').val(),
						'qntde6': $('#qnum6').val(),
						'qntde7': $('#qnum7').val(),
						'qntde8': $('#qnum8').val(),
						'descr1': $('#d1').val(),
						'descr2': $('#d2').val(),
						'descr3': $('#d3').val(),
						'descr4': $('#d4').val(),
						'descr5': $('#d5').val(),
						'descr6': $('#d6').val(),
						'descr7': $('#d7').val(),
						'descr8': $('#d8').val(),
						'val1': $('#vnum1').val(),
						'val2': $('#vnum2').val(),
						'val3': $('#vnum3').val(),
						'val4': $('#vnum4').val(),
						'val5': $('#vnum5').val(),
						'val6': $('#vnum6').val(),
						'val7': $('#vnum7').val(),
						'val8': $('#vnum8').val(),
						'maodeobra': $('#maodeobra').val(),
						'totalvalores': $('#totalvalores').val(),
						'id_client': $('#id_client').val()
					}
				}).done(function(data){

					alert ('Nota de serviço salva com sucesso');

				});

		}

		</script>

		<script type="text/javascript">
		
		function capture () {
			// Hyding buttons to not show us in image
			document.getElementById('total').style.display = 'none';
			document.getElementById('enviar').style.display = 'none';
			document.getElementById('download').style.display = 'none';

			let div = document.getElementById('photo');

			html2canvas(div).then((canvas) => {
				let a = document.createElement("a");
				a.download = "Nota.png";
				a.href = canvas.toDataURL("image/png");
				a.click(); // MAY NOT ALWAYS WORK!
			});

			}

		</script>

		<script type="text/javascript">

			function totalValores() {

				var qnum1 = document.getElementById("qnum1").value;
				var qnum2 = document.getElementById("qnum2").value;
				var qnum3 = document.getElementById("qnum3").value;
				var qnum4 = document.getElementById("qnum4").value;
				var qnum5 = document.getElementById("qnum5").value;
				var qnum6 = document.getElementById("qnum6").value;
				var qnum7 = document.getElementById("qnum7").value;
				var qnum8 = document.getElementById("qnum8").value;

				if(qnum1 == ""){
					qnum1 = 1;
				}
				if(qnum2 == ""){
					qnum2 = 1;
				}
				if(qnum3 == ""){
					qnum3 = 1;
				}
				if(qnum4 == ""){
					qnum4 = 1;
				}
				if(qnum5 == ""){
					qnum5 = 1;
				}
				if(qnum6 == ""){
					qnum6 = 1;
				}
				if(qnum7 == ""){
					qnum7 = 1;
				}
				if(qnum8 == ""){
					qnum8 = 1;
				}

				var vnum1 = document.getElementById("vnum1").value;
				var vnum2 = document.getElementById("vnum2").value;
				var vnum3 = document.getElementById("vnum3").value;
				var vnum4 = document.getElementById("vnum4").value;
				var vnum5 = document.getElementById("vnum5").value;
				var vnum6 = document.getElementById("vnum6").value;
				var vnum7 = document.getElementById("vnum7").value;
				var vnum8 = document.getElementById("vnum8").value;

				if(vnum1 == ""){
					vnum1 = 0;
				}
				if(vnum2 == ""){
					vnum2 = 0;
				}
				if(vnum3 == ""){
					vnum3 = 0;
				}
				if(vnum4 == ""){
					vnum4 = 0;
				}
				if(vnum5 == ""){
					vnum5 = 0;
				}
				if(vnum6 == ""){
					vnum6 = 0;
				}
				if(vnum7 == ""){
					vnum7 = 0;
				}
				if(vnum8 == ""){
					vnum8 = 0;
				}

				var mult1 = parseFloat(qnum1) * parseFloat(vnum1);
				var mult2 = parseFloat(qnum2) * parseFloat(vnum2);
				var mult3 = parseFloat(qnum3) * parseFloat(vnum3);
				var mult4 = parseFloat(qnum4) * parseFloat(vnum4);
				var mult5 = parseFloat(qnum5) * parseFloat(vnum5);
				var mult6 = parseFloat(qnum6) * parseFloat(vnum6);
				var mult7 = parseFloat(qnum7) * parseFloat(vnum7);
				var mult8 = parseFloat(qnum8) * parseFloat(vnum8);

				var soma = mult1 + mult2 + mult3 + mult3 + mult5 + mult6 + mult7 + mult8;

				var maodeobra = document.getElementById("maodeobra").value;

				var calculo = parseFloat(maodeobra) + soma;

				var resultado = calculo.toFixed(2);

				document.querySelector("#totalvalores").value = resultado;

			}

		</script>

		<script type="text/javascript">

			var input = document.querySelectorAll('.js-date')[0];
		
			var dateInputMask = function dateInputMask(elm) {
			elm.addEventListener('keypress', function(e) {
			if(e.keyCode < 47 || e.keyCode > 57) {
				e.preventDefault();
			}
			
			var len = elm.value.length;
			
			// If we're at a particular place, let the user type the slash
			// i.e., 12/12/1212
			if(len !== 1 || len !== 3) {
				if(e.keyCode == 47) {
				e.preventDefault();
				}
			}
			
			// If they don't add the slash, do it for them...
			if(len === 2) {
				elm.value += '/';
			}
		
			// If they don't add the slash, do it for them...
			if(len === 5) {
				elm.value += '/';
			}
			});
		};
			
		dateInputMask(input);

		</script>
	</body>
</html>