<?php
    include_once 'Conexao.php';
    
    class Usuario extends Conexao{
        public function cadastrarUsuario($empresa,$senha){
            $db = parent::criarConexao();
            $query = $db->prepare("INSERT INTO usuarios (empresa,senha) VALUES (?,?)");
            return $query->execute([$empresa,$senha]);
        }
        
        public function recuperaUsuario($empresa){
            $db = parent::criarConexao();
            $query = $db->prepare("SELECT * FROM usuarios WHERE empresa = :empresa");
            $query->bindValue(":empresa", $empresa);
            $query->execute();
            $resultado = $query->fetch(PDO::FETCH_OBJ);
            return $resultado;
        }

        public function listarUsuarios(){
            $db = parent::criarConexao();
            $query = $db->prepare("SELECT * FROM usuarios");
            $query->execute();
            $resultado = $query->fetchAll(PDO::FETCH_OBJ);
            return $resultado;
        }

        public function alteraUsuario($id,$empresa,$senha){
            $db = parent::criarConexao();
            $query = $db->prepare("UPDATE usuarios SET empresa = :empresa, senha = :senha WHERE id_usuario = :id");
            $query->bindValue(":id", $id);
            $query->bindValue(":empresa", $empresa);
            $query->bindValue(":senha", $senha);
            $resultado = $query->execute();
            return $resultado;
        }

        public function deletarUsuario($id){
            $db = parent::criarConexao();
            $query = $db->prepare("DELETE FROM usuarios WHERE id_usuario = :id");
            $query->bindValue(":id", $id);
            $resultado = $query->execute();
            return $resultado;
        }

        public function alteraSenha($empresa,$senha){
            $db = parent::criarConexao();
            $query = $db->prepare("UPDATE usuarios SET senha = :senha WHERE empresa = :empresa");
            $query->bindValue(":empresa", $empresa);
            $query->bindValue(":senha", $senha);
            $resultado = $query->execute();
            return $resultado;
        }

        public function ultimoLogin($id){
            $db = parent::criarConexao();
            $query = $db->prepare("INSERT INTO login (id_usuario, login) VALUES (:id,CURRENT_TIMESTAMP)");
            $query->bindValue(":id", $id);
            $resultado = $query->execute();
            return $resultado;
        }
    }
?>