<?php

include_once '../model/Conexao.class.php';
include_once '../model/Gerenciador.class.php';

$gerenciador = new Gerenciador();

$data = $_POST;

if(isset($data) && !empty($data)){
    $gerenciador->inserirCliente("clientes", $data);
    header("Location: ../view/clientes?cliente_adicionado_com_successo");

}

?>