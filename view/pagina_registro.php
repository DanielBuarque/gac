<!DOCTYPE html>
<html>
	<head>
        <?php 
            include_once 'dependencias.php'; 
        ?>
	</head>
    <body>
        <form method="POST" action="../controller/inserir_cliente">
            <div class="container">
                <div class="jumbotron">
                    <h2 class="text-center">
                        Registro de cliente
                        <span class="fa fa-user-plus"></span>
                    </h2>
                    <br>
                    <div class="form-row"> 
                        <div class="col-md-6">
                        <span class="fa fa-user-circle"></span>&nbsp;<label for="nome">Nome: </label>
                            <input class="form-control" type="text" name="nome" placeholder="Insira o nome do cliente" required autofocus/><br>
                        </div>
                        <div class="col-md-12">
                            <span class="fa fa-address-card"></span>&nbsp;<label for="endereco1">Endereço: </label>
                            <input class="form-control" type="text" name="endereco1" placeholder="Insira o endereço de origem" required/><br>
                        </div>
                        <div class="col-md-6">
                            <span class="fa fa-phone-square"></span>&nbsp;<label for="fone">Telefone: </label>
                            <input class="form-control" type="text" id="fone" name="fone" placeholder="(00) 00000-0000" required /><br>
                        </div>
                        <div class="col-md-12">
                            <span class="fa fa-car"></span>&nbsp;<label for="carro">Veículo: </label>
                            <input class="form-control" type="text" name="carro" placeholder="Insira o nome do veículo do cliente" required/><br>
                        </div>
                        <div class="col-md-6">
                            <span class="fa fa-file"></span>&nbsp;<label for="modelo">Modelo do veículo: </label>
                            <input class="form-control" type="text" name="modelo" placeholder="Insira o modelo do veículo do cliente" required/><br>
                        </div>
                        <div class="col-md-6">
                            <span class="fa fa-calendar"></span>&nbsp;<label for="ano">Ano de fabricação do veículo: </label>
                            <input class="form-control" type="text" name="ano" placeholder="Insira o ano de fabricação do veículo do cliente" required/><br>
                        </div>
                        <div class="col-md-6">
                            <span class="fa fa-id-card"></span>&nbsp;<label for="placa">Placa: </label>
                            <input class="form-control" type="text" name="placa" placeholder="Insira a placa do veículo do cliente" required/><br>
                        </div>
                        <div class="col-md-6">
                            <span class="fa fa-clock"></span>&nbsp;<label for="km">Quilometragem: </label>
                            <input class="form-control" type="text" name="km" placeholder="Insira a quilometragem atual do veículo do cliente" required/><br>
                        </div>
                        <div class="col-md-6" role="form">
                            <span class="fa fa-calendar"></span>&nbsp;<label for="datacliente">Data de cadastro do cliente: </label>
                            <input class="form-control js-date" maxlength="10" type="date" name="datacliente" value="<?=$client_info['datacliente']?>" required/><br>
                        </div>
                        <div class="col-md-12">
                            <span class="fa fa-edit"></span>&nbsp;<label for="obs">Observações: </label>
                            <textarea class="form-control" type="text" name="obs" cols="6" rows="10" style="resize: none;" value="<?=$client_info['obs']?>" placeholder="Insira observações sobre o veículo do cliente" required></textarea><br>
                        </div>
                    </div>
                    <button class="btn btn-secondary">Inserir cliente</button>
                    <div style="margin-top:10%;">
                    <a href="home"><span class="fa fa-arrow-circle-left"></span>&nbsp voltar</a>
                    </div>
                </div>
            </div>   
        </form>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script> 

        <script type="text/javascript">
            $(document).ready(function(){
                $("#fone").mask("(00) 00000-0000")
            });
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