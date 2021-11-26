<?php


session_start();

$conexao = require '../db/connect.php';

$nome_bairro = $_POST['nome_bairro'];
$id_cidade = $_POST['id_cidade'];

    

     $sql = "insert into bairros values(default,?,?)";
  
     $stmt = $conexao->prepare($sql);
  
     $result = $stmt->execute([$nome_bairro, $id_cidade]);
     
if($result){
        $_SESSION['sucesso'] = 'Bairro Adicionada com Sucesso';
}else{
        $_SESSION['erro'] = 'Erro ao adicionar Bairro';
    }
    header('Location: ../index.php');
exit();

?>