<?php


session_start();

$conexao = require '../db/connect.php';

$nome_cidade = $_POST['nome_cidade'];
$sigla_cidade = $_POST['sigla_cidade'];

    

     $sql = "insert into cidades values(default, ?,?)";
  
     $stmt = $conexao->prepare($sql);
  
     $result = $stmt->execute([$nome_cidade, $sigla_cidade]);
     
if($result){
        $_SESSION['sucesso'] = 'Cidade Adicionada com Sucesso';
}else{
        $_SESSION['erro'] = 'Erro ao adicionar cidade';
    }
    header('Location: ../index.php');
exit();

?>