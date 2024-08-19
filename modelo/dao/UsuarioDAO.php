<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto-asession/modelo/dao/BDPDO.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto-asession/modelo/vo/Usuario.php';

class UsuarioDAO {
    
    public function getById($id) {
       try {
           $sql = "SELECT * FROM usuario WHERE id_usuario = :id";
           $p_sql = BDPDO::getInstance()->prepare($sql);
           $p_sql->bindValue(":id", $id);
           $p_sql->execute();
           return $this->converterLinhaDaBaseDeDadosParaObjeto($p_sql->fetch(PDO::FETCH_ASSOC));
       } catch (Exception $e) {
           print "Ocorreu um erro ao tentar executar esta ação, foi gerado
um LOG do mesmo, tente novamente mais tarde.";
       }
   }
    
    private function converterLinhaDaBaseDeDadosParaObjeto($row) {
        $obj = new Usuario();
        $obj->setIdUsuario($row['id_usuario']);
        $obj->setNome($row['nome']);
        $obj->setCpf($row['cpf']);
        $obj->setEmail($row['email']);
        $obj->setTipoUsuario($row['tipo_usuario']);
        $obj->setSenha($row['senha']);
        $obj->setCodigoDne($row['codigo_dne']);
        $obj->setPermissao($row['permissao']);
        return $obj;
    }
    
    public function listAll() {
        try {
            $sql = "SELECT * FROM usuario ORDER BY nome ASC";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->execute();
            $lista = array();
            $row = $p_sql->fetch(PDO::FETCH_ASSOC);
            while ($row) {
                $lista[] = $this->converterLinhaDaBaseDeDadosParaObjeto($row);
                $row = $p_sql->fetch(PDO::FETCH_ASSOC);
            }
            return $lista;
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde." . "   ". $e;
        }
    }
    
    public function insert($usuario) {
        try {
            $sql = "INSERT INTO usuario (nome, cpf, email, tipo_usuario, senha, codigo_dne, permissao) "
                    . "VALUES (:nome, :cpf, :email, :tipo_usuario, :senha, :codigo_dne, :permissao)";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":nome", $usuario->getNome());
            $p_sql->bindValue(":cpf", $usuario->getCpf());
            $p_sql->bindValue(":email", $usuario->getEmail());
            $p_sql->bindValue(":tipo_usuario", $usuario->getTipoUsuario());
            $p_sql->bindValue(":senha", $usuario->getSenha());
            $p_sql->bindValue(":codigo_dne", $usuario->getCodigoDne());
            $p_sql->bindValue(":permissao", $usuario->getPermissao());
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao executar a função de salvar: " . $e->getMessage();
        }
    }
    
    public function update($usuario) {
        try {
            $sql = "UPDATE usuario SET nome = :nome, cpf = :cpf, email = :email, tipo_usuario = :tipo_usuario, "
                    . "senha = :senha, codigo_dne = :codigo_dne, permissao = :permissao WHERE id_usuario = :id";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":nome", $usuario->getNome());
            $p_sql->bindValue(":cpf", $usuario->getCpf());
            $p_sql->bindValue(":email", $usuario->getEmail());
            $p_sql->bindValue(":tipo_usuario", $usuario->getTipoUsuario());
            $p_sql->bindValue(":senha", $usuario->getSenha());
            $p_sql->bindValue(":codigo_dne", $usuario->getCodigoDne());
            $p_sql->bindValue(":permissao", $usuario->getPermissao());
            $p_sql->bindValue(":id", $usuario->getIdUsuario());
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao executar a função de atualizar: " . $e->getMessage();
        }
    }
    
    public function delete($id) {
        try {
            $sql = "DELETE FROM usuario WHERE id_usuario = :id";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":id", $id);
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao executar a função de remover: " . $e->getMessage();
        }
    }
}
