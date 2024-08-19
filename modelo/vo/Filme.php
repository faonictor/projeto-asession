<?php
class Filme {
    private $id_filme;
    private $titulo;
    private $duracao_filme;
    private $sinopse;
    private $classificacao;

    function getIdFilme() {
        return $this->id_filme;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getDuracaoFilme() {
        return $this->duracao_filme;
    }

    function getSinopse() {
        return $this->sinopse;
    }

    function getClassificacao() {
        return $this->classificacao;
    }

    function setIdFilme($id_filme) {
        $this->id_filme = $id_filme;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setDuracaoFilme($duracao_filme) {
        $this->duracao_filme = $duracao_filme;
    }

    function setSinopse($sinopse) {
        $this->sinopse = $sinopse;
    }

    function setClassificacao($classificacao) {
        $this->classificacao = $classificacao;
    }

    function toString() {
        return $this->titulo;
    }
}

