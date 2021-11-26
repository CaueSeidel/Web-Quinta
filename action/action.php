
<?php

use FontLib\Table\Type\head;

session_start();
  
 $tipo = "";
  
 if(isset($_GET['tipo'])){
     $tipo = $_GET['tipo'];
 }else{
     header('Location: ../index.php');
 }
  
 $conexao = require '../db/connect.php';
  
 if($tipo == 'cliente'){
     
  
  
     //$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
     //$telefone =  mysqli_real_escape_string($conexao, $_POST['telefone']);
     //$sql = "insert into clientes values(default, ?,?)";
  
     $nome = $_POST['nome'];
     $telefone = $_POST['telefone'];
     $cidades =  $_POST['id_cidade'];
     $data_nascimento = $_POST['data_nascimento'];

     //Validaçãooooo
     //if($nome = "" || $telefone = "" || $cidade = null || $data_nascimento = "" null){
       // echo "<p> Alguns dos dados está errado</p>";
        //header(Location: ../clientes.php );
     //}
    

     $sql = "insert into clientes values(default, ?,?,?,?)";
  
     $stmt = $conexao->prepare($sql);
  
     $result = $stmt->execute([$nome, $telefone, $cidades, $data_nascimento ]);
     
     if($result){
        $_SESSION['sucesso'] = 'Cliente Adicionada com Sucesso';
    }else{
        $_SESSION['erro'] = 'Erro ao adicionar';
    }
    header('Location: ../index.php');
    exit();


 }
  
  
 /*
 if(isset($_POST['nome']) && isset($_POST['password']) ){
     $user = $_POST['nome'];
     $pass = $_POST['password'];
  
     $conexao = require '../db/connect.php';
     $sql = " SELECT usuarios.id, usuarios.nome, senha, tipo.nome as tipo " .
            " from usuarios , tipo " . 
            " where usuarios.id_tipo = tipo.id " .
            " and login = '$user' " .
            " and senha = md5('$pass') ";  
  
     $result = $conexao->query($sql);
     
     $row = $result->fetch(PDO::FETCH_ASSOC);
  
     if(isset($row['nome'])){
         $_SESSION['id_usuario'] = $row['id'];
         $_SESSION['nome_usuario'] = $row['nome'];
         header('Location: ../index.php');
     } else {
         header('Location: ../login.php');
         
 }
 }
  
 */
  
  
  
  
  
  
 ?>
 
 