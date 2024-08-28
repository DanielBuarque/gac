<?php

include_once 'model/Conexao.class.php';
include_once 'model/Gerenciador.class.php';

$gerenciador = new Gerenciador();

    if(ISSET($_POST['login'])){
        if($_POST['usuario'] != "" || $_POST['senha'] != ""){
            $usuario = $_POST['usuario'];
            $senha = $_POST['senha'];

            $gerenciador->validateUser($usuario,$senha);
        }
    }

    function acceptLogin($return){
        if($return == true) {
            header("Location: view/home.php");
        } else{
            echo"<center><p class='text-danger' style='margin-top:1%;'>Nome de usuário ou senha incorretos!</p></center>";
        }
    }
?>