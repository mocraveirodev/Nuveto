<?php
    include_once 'Conexao.php';
    
    class Email extends Conexao{
        public function contatos($nome,$email,$telefone,$empresa,$mensagem,$enviado,$msg_log){
            $db = parent::criarConexao();

            $query = $db->prepare("INSERT INTO contatos (nome,email,telefone,empresa,mensagem,enviado,msg_log) VALUES (:nome,:email,:telefone,:empresa,:mensagem,:enviado,:msg_log)");
            $query->bindValue(":nome", $nome);
            $query->bindValue(":email", $email);
            $query->bindValue(":telefone", $telefone);
            $query->bindValue(":empresa", $empresa);
            $query->bindValue(":mensagem", $mensagem);
            $query->bindValue(":enviado", $enviado);
            $query->bindValue(":msg_log", $msg_log);
            $resultado = $query->execute();

            return $resultado;
        }
        
        public function newsletter($nome,$email,$enviado,$msg_log){
            $db = parent::criarConexao();
            
            $query = $db->prepare("INSERT INTO newsletter (nome,email,enviado,msg_log) VALUES (:nome,:email,:enviado,:msg_log)");
            $query->bindValue(":nome", $nome);
            $query->bindValue(":email", $email);
            $query->bindValue(":enviado", $enviado);
            $query->bindValue(":msg_log", $msg_log);
            $resultado = $query->execute();
            
            return $resultado;
        }

        public function parceiros($nome,$empresa,$email,$cargo,$telefone,$tec_atual,$num_agents,$industry,$expec_negocio,$expec_acordo,$notes,$nome_rep,$email_rep,$telefone_rep,$enviado,$msg_log){
            $db = parent::criarConexao();

            $query = $db->prepare("INSERT INTO parceiros (nome,empresa,email,cargo,telefone,tec_atual,num_agents,industry,expec_negocio,expec_acordo,notes,nome_rep,email_rep,telefone_rep,enviado,msg_log) VALUES (:nome,:empresa,:email,:cargo,:telefone,:tec_atual,:num_agents,:industry,:expec_negocio,:expec_acordo,:notes,:nome_rep,:email_rep,:telefone_rep,:enviado,:msg_log)");
            $query->bindValue(":nome", $nome);
            $query->bindValue(":empresa", $empresa);
            $query->bindValue(":email", $email);
            $query->bindValue(":cargo", $cargo);
            $query->bindValue(":telefone", $telefone);
            $query->bindValue(":tec_atual", $tec_atual);
            $query->bindValue(":num_agents", $num_agents);
            $query->bindValue(":industry", $industry);
            $query->bindValue(":expec_negocio", $expec_negocio);
            $query->bindValue(":expec_acordo", $expec_acordo);
            $query->bindValue(":notes", $notes);
            $query->bindValue(":nome_rep", $nome_rep);
            $query->bindValue(":email_rep", $email_rep);
            $query->bindValue(":telefone_rep", $telefone_rep);
            $query->bindValue(":enviado", $enviado);
            $query->bindValue(":msg_log", $msg_log);
            $resultado = $query->execute();

            return $resultado;
        }

        public function falha($origem,$nome,$empresa,$email,$cargo,$telefone,$tec_atual,$num_agents,$industry,$expec_negocio,$expec_acordo,$notes,$mensagem,$nome_rep,$email_rep,$telefone_rep,$enviado,$msg_log){
            $db = parent::criarConexao();

            $query = $db->prepare("INSERT INTO falha (origem,nome,empresa,email,cargo,telefone,tec_atual,num_agents,industry,expec_negocio,expec_acordo,notes,nome_rep,email_rep,telefone_rep,enviado,msg_log) VALUES (:origem,:nome,:empresa,:email,:cargo,:telefone,:tec_atual,:num_agents,:industry,:expec_negocio,:expec_acordo,:notes,:nome_rep,:email_rep,:telefone_rep,:enviado,:msg_log)");
            $query->bindValue(":origem", $origem);
            $query->bindValue(":nome", $nome);
            $query->bindValue(":empresa", $empresa);
            $query->bindValue(":email", $email);
            $query->bindValue(":cargo", $cargo);
            $query->bindValue(":telefone", $telefone);
            $query->bindValue(":tec_atual", $tec_atual);
            $query->bindValue(":num_agents", $num_agents);
            $query->bindValue(":industry", $industry);
            $query->bindValue(":expec_negocio", $expec_negocio);
            $query->bindValue(":expec_acordo", $expec_acordo);
            $query->bindValue(":notes", $notes);
            $query->bindValue(":nome_rep", $nome_rep);
            $query->bindValue(":email_rep", $email_rep);
            $query->bindValue(":telefone_rep", $telefone_rep);
            $query->bindValue(":enviado", $enviado);
            $query->bindValue(":msg_log", $msg_log);
            $resultado = $query->execute();

            return $resultado;
        }

        public function confirmaparceiro($email,$id_parceiro,$envio_op,$enviado,$msg_log){
            $db = parent::criarConexao();
            
            $query = $db->prepare("INSERT INTO confirmaparceiro (email,id_parceiro,envio_op,enviado,msg_log) VALUES (:email,:id_parceiro,:envio_op,:enviado,:msg_log)");
            $query->bindValue(":email", $email);
            $query->bindValue(":id_parceiro", $id_parceiro);
            $query->bindValue(":envio_op", $envio_op);
            $query->bindValue(":enviado", $enviado);
            $query->bindValue(":msg_log", $msg_log);
            $resultado = $query->execute();
            
            return $resultado;
        }

        public function recuperaOportunidade($email){
            $db = parent::criarConexao();
            $query = $db->prepare("SELECT id_parceiro,enviado FROM parceiros WHERE email = :email ORDER BY id_parceiro DESC limit 1;");
            $query->bindValue(":email", $email);
            $query->execute();
            $resultado = $query->fetch(PDO::FETCH_OBJ);
            return $resultado;
        }
    }
?>