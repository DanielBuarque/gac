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
							<?php foreach($gerenciador->getInfoNotas("notaservico", $id) as $nota_cliente): ?>
								<form class="navbar-brand">
									<input class="form-control col-md-2 js-date input-data" type="date" id="data_nota" name="data_nota" value="<?=$nota_cliente['data_nota']?>" readonly/>
								</form>
							<?php endforeach; ?>
						</nav>
					</div>
					<h3 class="text-center" style="margin-top:1%;"><span class="fa fa-file-alt"></span> Visualização da nota de serviço do cliente </h3>
					<div class="form-row">
					<?php foreach($gerenciador->getInfoNotas("notaservico", $id) as $nota_cliente): ?>
							<div class="col-md-12"> 
								<div class="form-control">
									<h5 style="margin-top:1%; text-align:center;"> DESCRIÇÃO </h5>
								</div>
							</div>
							<div class="col-md-12">
								<input class="form-control" type="text" style="text-align:center; margin-top:1%;" placeholder="Descrição do(s) problema(s) encontrado(s) / Serviço(s)." disabled/>
								<textarea class="form-control" id="descricao" name="descricao" rows="6" style="resize: none;" readonly><?=$nota_cliente['descricao']?></textarea>
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
								<input class="form-control" id="qnum1" name="qntde1" type="number" value="<?=$nota_cliente['qntde1']?>" readonly/>
								<input class="form-control" id="qnum2" name="qntde2" type="number" value="<?=$nota_cliente['qntde2']?>" readonly/>
								<input class="form-control" id="qnum3" name="qntde3" type="number" value="<?=$nota_cliente['qntde3']?>" readonly/>
								<input class="form-control" id="qnum4" name="qntde4" type="number" value="<?=$nota_cliente['qntde4']?>" readonly/>
								<input class="form-control" id="qnum5" name="qntde5" type="number" value="<?=$nota_cliente['qntde5']?>" readonly/>
								<input class="form-control" id="qnum6" name="qntde6" type="number" value="<?=$nota_cliente['qntde6']?>" readonly/>
								<input class="form-control" id="qnum7" name="qntde7" type="number" value="<?=$nota_cliente['qntde7']?>" readonly/>
								<input class="form-control" id="qnum8" name="qntde8" type="number" value="<?=$nota_cliente['qntde8']?>" readonly/>
							</div>
							<div class="col-md-7" style="margin-top:1%;">
								<input class="form-control" type="text" style="text-align:center;" placeholder="Descrição" disabled/>
								<input class="form-control" type="text" id="d1" name="descr1" value="<?=$nota_cliente['descr1']?>" readonly/>
								<input class="form-control" type="text" id="d2" name="descr2" value="<?=$nota_cliente['descr2']?>" readonly/>
								<input class="form-control" type="text" id="d3" name="descr3" value="<?=$nota_cliente['descr3']?>" readonly/>
								<input class="form-control" type="text" id="d4" name="descr4" value="<?=$nota_cliente['descr4']?>" readonly/>
								<input class="form-control" type="text" id="d5" name="descr5" value="<?=$nota_cliente['descr5']?>" readonly/>
								<input class="form-control" type="text" id="d6" name="descr6" value="<?=$nota_cliente['descr6']?>" readonly/>
								<input class="form-control" type="text" id="d7" name="descr7" value="<?=$nota_cliente['descr7']?>" readonly/>
								<input class="form-control" type="text" id="d8" name="descr8" value="<?=$nota_cliente['descr8']?>" readonly/>
							</div>
							<div class="col-md-2" style="margin-top:1%;">
								<input class="form-control" type="text" style="text-align:center;" placeholder="R$" disabled/>
								<input class="form-control" id="vnum1" name="val1" type="number" value="<?=$nota_cliente['val1']?>" readonly/>
								<input class="form-control" id="vnum2" name="val2" type="number" value="<?=$nota_cliente['val2']?>" readonly/>
								<input class="form-control" id="vnum3" name="val3" type="number" value="<?=$nota_cliente['val3']?>" readonly/>
								<input class="form-control" id="vnum4" name="val4" type="number" value="<?=$nota_cliente['val4']?>" readonly/>
								<input class="form-control" id="vnum5" name="val5" type="number" value="<?=$nota_cliente['val5']?>" readonly/>
								<input class="form-control" id="vnum6" name="val6" type="number" value="<?=$nota_cliente['val6']?>" readonly/>
								<input class="form-control" id="vnum7" name="val7" type="number" value="<?=$nota_cliente['val7']?>" readonly/>
								<input class="form-control" id="vnum8" name="val8" type="number" value="<?=$nota_cliente['val8']?>" readonly/>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-6">
							</div>
							<div class="col-md-3">
								<input class="form-control" type="text" style="text-align:center;" placeholder="Valor da mão de obra" disabled/>
								<input class="form-control" id="maodeobra" name="maodeobra" style="text-align:center; margin-top:1%;" value="<?='R$ '. number_format($nota_cliente['maodeobra'], 2,',','.');?>" readonly/>
								
							</div>
							<div class="col-md-3">
								<input class="form-control" type="text" style="text-align:center;" placeholder="TOTAL" disabled/>
								<input class="form-control" id="totalvalores" name="totalvalores" style="text-align:center; margin-top:1%;" value="<?='R$ '. number_format($nota_cliente['totalvalores'], 2,',','.');?>" readonly/>
							</div>
						</div>
					<?php endforeach; ?>
					<p style="font-size:12px; text-align:center; margin-top:2%; font-weight: bold;"> OBSERVAÇÃO: ESSE DOCUMENTO NÃO POSSUI VALOR FISCAL.</p>
					<div class="form-row" style="margin-top:5%;">
						<div class="col-md-4"></div>
						<div class="col-md-4">
							<button type="button" class="btn btn-success" style="width:100%;" onclick="capture()"> Download da Nota de Serviço </button>
						</div>
						<div class="col-md-4"></div>
					</div>
					<div style="margin:5% 0 0 0;">
						<a href="clientes"><span class="fa fa-arrow-circle-left"></span>&nbsp voltar</a>
					</div>
				</form>	
			</div>
		</div>
	
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script> 

		<script type="text/javascript">
		
		function capture () {

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