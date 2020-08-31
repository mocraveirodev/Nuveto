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

        public function confirmaparceiro($nome,$empresa,$email,$cargo,$telefone,$tec_atual,$num_agents,$industry,$expec_negocio,$expec_acordo,$notes,$nome_rep,$email_rep,$telefone_rep,$enviado,$msg_log){
            $db = parent::criarConexao();

            $query = $db->prepare("INSERT INTO confirmaparceiro (nome,empresa,email,cargo,telefone,tec_atual,num_agents,industry,expec_negocio,expec_acordo,notes,nome_rep,email_rep,telefone_rep,enviado,msg_log) VALUES (:nome,:empresa,:email,:cargo,:telefone,:tec_atual,:num_agents,:industry,:expec_negocio,:expec_acordo,:notes,:nome_rep,:email_rep,:telefone_rep,:enviado,:msg_log)");
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

        public function recuperaOportunidade($email){
            $db = parent::criarConexao();
            $query = $db->prepare("SELECT id_parceiro,enviado FROM parceiros WHERE email = :email ORDER BY id_parceiro DESC limit 1;");
            $query->bindValue(":email", $email);
            $query->execute();
            $resultado = $query->fetch(PDO::FETCH_OBJ);
            return $resultado;
        }

        public function recuperaParceiro($nome,$empresa,$email,$cargo,$telefone,$tec_atual,$num_agents,$industry,$expec_negocio,$expec_acordo,$notes,$nome_rep,$email_rep,$telefone_rep){
            $db = parent::criarConexao();
            $query = $db->prepare("SELECT * FROM parceiros WHERE nome = :nome AND empresa = :empresa AND email = :email AND cargo = :cargo AND telefone = :telefone AND tec_atual = :tec_atual AND num_agents = :num_agents AND industry = :industry AND expec_negocio = :expec_negocio AND expec_acordo = :expec_acordo AND notes = :notes AND nome_rep = :nome_rep AND email_rep = :email_rep AND telefone_rep = :telefone_rep");
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
            $query->execute();
            $resultado = $query->fetchAll(PDO::FETCH_OBJ);
            // $resultado = $query->fetchAll();
            return $resultado;
        }

        public function aprovaParceiro($nome,$empresa,$email,$cargo,$telefone,$tec_atual,$num_agents,$industry,$expec_negocio,$expec_acordo,$notes,$nome_rep,$email_rep,$telefone_rep){
            $db = parent::criarConexao();

            $query = $db->prepare("INSERT INTO aprovado (nome,empresa,email,cargo,telefone,tec_atual,num_agents,industry,expec_negocio,expec_acordo,notes,nome_rep,email_rep,telefone_rep,aprovado_em) VALUES (:nome,:empresa,:email,:cargo,:telefone,:tec_atual,:num_agents,:industry,:expec_negocio,:expec_acordo,:notes,:nome_rep,:email_rep,:telefone_rep,CURRENT_TIMESTAMP)");
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
            $query->bindValue(":aprovado_em", $enviado);
            $resultado = $query->execute();

            return $resultado;
        }

        public function rejeitaParceiro($nome,$empresa,$email,$cargo,$telefone,$tec_atual,$num_agents,$industry,$expec_negocio,$expec_acordo,$notes,$nome_rep,$email_rep,$telefone_rep){

        }
    }
?>