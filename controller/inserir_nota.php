<?php

include_once '../model/Conexao.class.php';
include_once '../model/Gerenciador.class.php';

$gerenciador = new Gerenciador();

$data = $_POST;

if(isset($data) && !empty($data)){
    $gerenciador->inserirNota("notaservico", $data);
    header("Location: ../view/nota_servicos?nota_adicionada_com_successo");

}

?>