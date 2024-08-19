<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto-asession/modelo/dao/FilmeDAO.php';


if (isset($_GET['idDel'])){
    $dao = new FilmeDAO();
    $dao->delete($_GET['idDel']);
    echo "<script> alert('Filme removido com sucesso! :D ');"
    . "window.location='../filmeList.php';"
    . "</script>";
    die();
}

$filmeQueEuVouSalvar = new Filme();
$filmeQueEuVouSalvar->setIdFilme($_POST['id_filme']);
$filmeQueEuVouSalvar->setTitulo($_POST['titulo']);
$filmeQueEuVouSalvar->setDuracaoFilme($_POST['duracao_filme']);
$filmeQueEuVouSalvar->setSinopse($_POST['sinopse']);
$filmeQueEuVouSalvar->setClassificacao($_POST['classificacao']);

$dao = new FilmeDAO();

if ($_POST['id_filme'] == "0") {
    $dao->insert($filmeQueEuVouSalvar);
    echo "<script> alert('Filme salvo com sucesso! :D ');"
. "window.location='../filmeList.php';"
. "</script>";
} else {
    $dao->update($filmeQueEuVouSalvar);
    echo "<script> alert('Filme Atualizado! :D ');"
    . "window.location='../filmeList.php';"
    . "</script>";

}



