<!DOCTYPE html>
<html>
	<head>
		<?php include_once 'dependencias.php'; ?>
	</head>
	<body>
		<div class="container">
			<div class="jumbotron">
				<div class="form-row">
					<div class="col-md-3 titlelogo">
					</div>
					<div class="col-md-9">
						<img src="../assets/img/gac.PNG">
					</div>					
				</div>
				<div class="table-responsive" style="margin-top:2%;">
					<nav class="navbar navbar-dark bg-dark p-1">
					<span class="navbar-brand mb-0 h1" style="margin-left:2%;">MENU</span>
					</nav>
						<ul>
							<li><h4><a href="pagina_registro"><span class="fa fa-user-plus"></span> Adicionar cliente </a></h4></li>
							<li><h4><a href="clientes"><span class="fa fa-users"></span> Clientes </a></h4></li>
							<!-- <li><h4><a href="nota_servicos"><span class="fa fa-file"></span> Emitir Nota de Serviço</a></h4></li> -->
						</ul>
				</div>
				<div class="form-row" style="margin-top:10%;">
					<div class="col-md-5">
					</div>
					<div class="col-md-2">
						<button type="button" class="btn btn-secondary btn-lg"><a href="../index"><span class="fa fa-door-open"></span>&nbsp SAIR</a></button>
					</div>
					<div class="col-md-5">
					</div>
				</div>
				<p style="font-size:12px; text-align:center; margin-top:8%;"> Desenvolvido por Daniel Alvarez de Mello Buarque Ribeiro &trade; - Todos os direitos reservados. &copy;</p>
			</div>
		</div>
		
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script> 
	</body>
</html>