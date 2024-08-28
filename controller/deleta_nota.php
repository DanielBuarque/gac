<?php

include_once '../model/Conexao.class.php';
include_once '../model/Gerenciador.class.php';

$gerenciador = new Gerenciador();

$id = $_POST['id'];

if(isset($id) && !empty($id)){
    $gerenciador->deletaNota("notaservico", $id);  

    header("Location: ../view/notas_cliente?nota_excluida");   
}

?>