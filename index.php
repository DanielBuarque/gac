<?php
	include_once 'model/Conexao.class.php';
	include_once 'model/Gerenciador.class.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<?php include_once 'view/dependencias2.php'; ?>
	</head>
<body>
	<div class="container">
  		<div class="jumbotron">
			<div class="form-row">
		  		<div class="col-md-3">
        		</div>
				<div class="col-md-9">
		  			<img src="assets/img/gac.PNG">
				</div>					
		  	</div>
		  <hr class="my-4"/>
		  <div class="form-row" style="margin-top:1%;">
		  	<div class="col-md-2"></div>
		  		<div class="col-md-8">
		  			<p style="text-align:center;">Olá, seja bem vindo(a)! </p>
					<p style="text-align:center;">Digite seu <span style="font-weight:bold;"> usuário</span> e <span style="font-weight:bold;"> senha</span> para acessar o sistema. </p>
		  		</div>
			<div class="col-md-2"></div>
		  </div>
		  <div class="form-row">	
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<?php include 'controller/valida_login.php'?>
		  			<form class="form-control" style="height:200px; margin-top:10%;" method="POST" action="">
						<p style="text-align:center;">Acesso ao Sistema</p>
		  				<input class="form-control" style="margin-top:0%;" type="text" name="usuario" placeholder="Usuário:" required="required">
    					<input class="form-control" style="margin-top:1%;" type="password" name="senha" placeholder="Senha:" required="required">
						<button class="btn btn-secondary" style="margin-top:2%; float:right;" type="submit" name="login">Login</button>
		  			</form>
					
				</div>
				<div class="col-md-4"></div>
		  </div>
		</div>
	</div>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script> 
</body>
</html>