<?php

//include_once 'controller/valida_login.php';


class Gerenciador extends Conexao {

    public function validateUser($usuario, $senha){
        
        $pdo = parent::get_instance();
        $sql = "SELECT * FROM usuarios WHERE usuario=? AND senha=?";
        $statement = $pdo -> prepare($sql);
        $statement ->execute(array($usuario,$senha));
        $row = $statement->rowCount();
        if($row > 0) {
            acceptLogin($row);
        } else{
            acceptLogin($row);
        }
    }

    public function inserirCliente($table, $data){

        $pdo = parent::get_instance();
        $fields = implode(", ", array_keys($data));
        $values = ":".implode(", :", array_keys($data));
        $sql = "INSERT INTO $table ($fields) VALUES ($values)";
        $statement = $pdo -> prepare($sql);
        foreach($data as $key => $value){
            $statement -> bindValue(":$key", $value, PDO::PARAM_STR);
        }
        $statement -> execute();
    }

    public function inserirNota($table, $data){

        $pdo = parent::get_instance();
        $fields = implode(", ", array_keys($data));
        $values = ":".implode(", :", array_keys($data));
        $sql = "INSERT INTO $table ($fields) VALUES ($values)";
        $statement = $pdo -> prepare($sql);
        foreach($data as $key => $value){
            $statement -> bindValue(":$key", $value, PDO::PARAM_STR);
        }
        $statement -> execute();
    }

    public function listarNotas($table, $id){ 
 
        $pdo = parent::get_instance();
        if (isset($id) && !empty($id)){
            $sql = "SELECT id, data_nota, descricao, totalvalores FROM $table WHERE $table.id_client = $id ORDER BY data_nota ASC";
        }else{
            //$sql = "UPDATE $table SET $table.id = 0 WHERE id IS NULL";
            $sql = "SELECT id, data_nota, descricao, totalvalores FROM $table";
        }   
        $statement = $pdo->query($sql);
        $statement->execute(); 
            
        return $statement->fetchAll();
    }

    public function listClient($table){
        $pdo = parent::get_instance();
        $sql = "SELECT * FROM $table ORDER BY nome ASC";
        $statement = $pdo->query($sql);
        $statement->execute();
        
        return $statement->fetchAll();
    }

    public function deleteClient($table, $id){
        $pdo = parent::get_instance();
        $sql = "DELETE FROM $table WHERE id = :id";
        $statement = $pdo->prepare($sql);
        $statement -> bindValue(":id",$id);

        $statement -> execute();
    }

    public function deletaNota($table, $id){
        $pdo = parent::get_instance();
        $sql = "DELETE FROM $table WHERE id = :id";
        $statement = $pdo->prepare($sql);
        $statement -> bindValue(":id",$id);

        $statement -> execute();

        return $statement->fetchAll();
    }

    public function getInfo($table, $id){
        $pdo = parent::get_instance();
        $sql = "SELECT * FROM $table WHERE id = :id";
        $statement = $pdo->prepare($sql);
        $statement -> bindValue(":id",$id);
        $statement -> execute();

        return $statement->fetchAll();
    }

    public function getInfoNotas($table, $id){
        $pdo = parent::get_instance();
        $sql = "SELECT * FROM $table WHERE $table.id = $id";
        $statement = $pdo->prepare($sql);
        $statement -> execute();

        return $statement->fetchAll();
    }

    public function updateClient($table, $data){
        $pdo = parent::get_instance();
        $new_values = "";
        foreach($data as $key => $value){
            $new_values .= "$key=:$key, ";
        }
        $new_values = substr($new_values, 0, -2);
        $sql = "UPDATE $table SET $new_values WHERE id = :id";
        $statement = $pdo->prepare($sql);
        foreach($data as $key => $value){
            $statement -> bindValue(":$key",$value, PDO::PARAM_STR);
        }
        $statement -> execute();
    }
}

?>