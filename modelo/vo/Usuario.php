<?php
class Usuario {
    private $id_usuario;
    private $nome;
    private $cpf;
    private $email;
    private $tipo_usuario;
    private $senha;
    private $codigo_dne;
    private $permissao;

    function getIdUsuario() {
        return $this->id_usuario;
    }

    function getNome() {
        return $this->nome;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getEmail() {
        return $this->email;
    }

    function getTipoUsuario() {
        return $this->tipo_usuario;
    }

    function getSenha() {
        return $this->senha;
    }

    function getCodigoDne() {
        return $this->codigo_dne;
    }

    function getPermissao() {
        return $this->permissao;
    }

    function setIdUsuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTipoUsuario($tipo_usuario) {
        $this->tipo_usuario = $tipo_usuario;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setCodigoDne($codigo_dne) {
        $this->codigo_dne = $codigo_dne;
    }

    function setPermissao($permissao) {
        $this->permissao = $permissao;
    }

    function toString() {
        return $this->nome;
    }
}