<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto-asession/modelo/dao/BDPDO.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto-asession/modelo/vo/Filme.php';

class FilmeDAO {

    public function getById($id) {
        try {
            $sql = "SELECT * FROM filme WHERE id_filme = :id";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":id", $id, PDO::PARAM_INT);
            $p_sql->execute();
            return $this->converterLinhaDaBaseDeDadosParaObjeto($p_sql->fetch(PDO::FETCH_ASSOC));
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação: " . $e->getMessage();
        }
    }
    
    private function converterLinhaDaBaseDeDadosParaObjeto($row) {
        $obj = new Filme();
        $obj->setIdFilme($row['id_filme']);
        $obj->setTitulo($row['titulo']);
        $obj->setDuracaoFilme($row['duracao_filme']);
        $obj->setSinopse($row['sinopse']);
        $obj->setClassificacao($row['classificacao']);
        return $obj;
    }
    
    public function listAll() {
        try {
            $sql = "SELECT * FROM filme ORDER BY titulo ASC";
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
            print "Ocorreu um erro ao tentar executar esta ação: " . $e->getMessage();
        }
    }
    
    public function insert($filme) {
        try {
            $sql = "INSERT INTO filme (titulo, duracao_filme, sinopse, classificacao) "
                    . "VALUES (:titulo, :duracao_filme, :sinopse, :classificacao)";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":titulo", $filme->getTitulo());
            $p_sql->bindValue(":duracao_filme", $filme->getDuracaoFilme(), PDO::PARAM_INT);
            $p_sql->bindValue(":sinopse", $filme->getSinopse());
            $p_sql->bindValue(":classificacao", $filme->getClassificacao());
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao executar a função de salvar: " . $e->getMessage();
        }
    }
    
    public function update($filme) {
        try {
            $sql = "UPDATE filme SET titulo = :titulo, duracao_filme = :duracao_filme, "
                    . "sinopse = :sinopse, classificacao = :classificacao "
                    . "WHERE id_filme = :id";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":titulo", $filme->getTitulo());
            $p_sql->bindValue(":duracao_filme", $filme->getDuracaoFilme(), PDO::PARAM_INT);
            $p_sql->bindValue(":sinopse", $filme->getSinopse());
            $p_sql->bindValue(":classificacao", $filme->getClassificacao());
            $p_sql->bindValue(":id", $filme->getIdFilme(), PDO::PARAM_INT);
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao executar a função de atualizar: " . $e->getMessage();
        }
    }
    
    public function delete($id) {
        try {
            $sql = "DELETE FROM filme WHERE id_filme = :id";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":id", $id, PDO::PARAM_INT);
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao executar a função de remover: " . $e->getMessage();
        }
    }
}