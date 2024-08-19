<?php
require_once $_SERVER['DOCUMENT_ROOT'] . 
        '/projeto-asession/modelo/dao/UsuarioDAO.php';

if (isset($_GET['idDel'])){
    $dao= new UsuarioDAO();
    $dao->delete($_GET['idDel']);
    echo "<script> alert('Usuário removido com sucesso! :D ');"
. "window.location='../usuarioList.php';"
        . "</script>";
    die();
}

$usuarioQueEuVouSalvar = new Usuario();
$usuarioQueEuVouSalvar->setIdUsuario($_POST['id_usuario']);
$usuarioQueEuVouSalvar->setNome($_POST['nome']);
$usuarioQueEuVouSalvar->setCpf($_POST['cpf']);
$usuarioQueEuVouSalvar->setEmail($_POST['email']);
$usuarioQueEuVouSalvar->setTipoUsuario($_POST['tipo_usuario']);
$usuarioQueEuVouSalvar->setSenha($_POST['senha']);
$usuarioQueEuVouSalvar->setCodigoDne($_POST['codigo_dne']);
$usuarioQueEuVouSalvar->setPermissao($_POST['permissao']);

$dao = new UsuarioDAO();

if ($_POST['id_usuario']=="0"){
    $dao= new UsuarioDAO();
    $dao->insert($usuarioQueEuVouSalvar);
    echo "<script> alert('Usuário salvo com sucesso! :D ');"
    . "window.location='../usuarioList.php';"
            . "</script>";
}
else{
    $dao= new UsuarioDAO();
    $dao->update($usuarioQueEuVouSalvar);
    echo "<script> alert('Usuário Atualizado! :D ');"
    . "window.location='../usuarioList.php';"
            . "</script>";
}
