<!DOCTYPE html>
<html>
	<head>
        <?php 
            include_once '../model/Conexao.class.php';
            include_once '../model/Gerenciador.class.php';
            include_once 'dependencias.php'; 

            $gerenciador = new Gerenciador();

            $id = $_POST['id'];
        ?>
	</head>
    <body>
        <form method="POST" action="../controller/atualiza_cliente">
            <div class="container">
                <div class="jumbotron">
                    <h2 class="text-center">
                        <span class="fa fa-user-edit"></span>
                        Página do Cliente
                    </h2>
                    <br>
                    <div class="form-row"> 

                        <?php foreach($gerenciador->getInfo("clientes", $id) as $client_info): ?>

                        <div class="col-md-6">
                        <span class="fa fa-user-circle"></span>&nbsp;<label for="nome">Nome: </label>
                            <input class="form-control" type="text" name="nome" value="<?=$client_info['nome']?>" readonly/><br>
                        </div>
                        <div class="col-md-12">
                            <span class="fa fa-address-card"></span>&nbsp;<label for="endereco1">Endereço: </label>
                            <input class="form-control" type="text" name="endereco1" value="<?=$client_info['endereco1']?>" readonly/><br>
                        </div>
                        <div class="col-md-6">
                            <span class="fa fa-phone-square"></span>&nbsp;<label for="fone">Telefone: </label>
                            <input class="form-control" type="text" id="fone" name="fone" value="<?=$client_info['fone']?>" readonly/><br>
                        </div>
                        <div class="col-md-12">
                            <span class="fa fa-car"></span>&nbsp;<label for="carro">Veículo: </label>
                            <input class="form-control" type="text" name="carro" value="<?=$client_info['carro']?>" readonly/><br>
                        </div>
                        <div class="col-md-6">
                            <span class="fa fa-file"></span>&nbsp;<label for="modelo">Modelo do veículo: </label>
                            <input class="form-control" type="text" name="modelo" value="<?=$client_info['modelo']?>" readonly/><br>
                        </div>
                        <div class="col-md-6">
                            <span class="fa fa-calendar"></span>&nbsp;<label for="ano">Ano de fabricação do veículo: </label>
                            <input class="form-control" type="text" name="ano" value="<?=$client_info['ano']?>" readonly/><br>
                        </div>
                        <div class="col-md-6">
                            <span class="fa fa-id-card"></span>&nbsp;<label for="placa">Placa: </label>
                            <input class="form-control" type="text" name="placa" value="<?=$client_info['placa']?>" readonly/><br>
                        </div>
                        <div class="col-md-6">
                            <span class="fa fa-clock"></span>&nbsp;<label for="km">Quilometragem: </label>
                            <input class="form-control" type="text" name="km" value="<?=$client_info['km']?>" readonly/><br>
                        </div>
                        <div class="col-md-6" role="form">
                            <span class="fa fa-calendar"></span>&nbsp;<label for="datacliente">Data de cadastro do cliente: </label>
                            <input class="form-control js-date" type="date" name="datacliente" value="<?=$client_info['datacliente']?>" readonly/><br>
                        </div>
                        <div class="col-md-12">
                            <span class="fa fa-edit"></span>&nbsp;<label for="obs">Observações: </label>
                            <textarea class="form-control" type="text" name="obs" cols="6" rows="10" style="resize: none;" readonly><?=$client_info['obs']?></textarea>
                        </div>
                    </div>

                    <input type="hidden" name="id" value="<?=$client_info['id']?>"/>

                    <?php endforeach; ?>

                    <div style="margin-top:10%;">
                        <a href="clientes"><span class="fa fa-arrow-circle-left"></span>&nbsp voltar</a>
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