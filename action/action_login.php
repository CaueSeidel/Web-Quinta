



<?php
session_start();

if(isset($_POST['nome']) && isset($_POST['password']))
{
    //esses dois vão pegar o nome e senha inseridos no formulario
    $user = $_POST['nome'];
    $pass = $_POST['password'];

    echo $user;
    echo $pass;
    $conexao = require '../db/connect.php';

    $sql = " SELECT u.login as usuario, t.nome as tipo " .
            " from usuarios u, tipo t " . 
            " where u.tipo_id = t.id " . 
            " and login = '$user' " .
            " and senha = md5('$pass') ";
       
    $result = $conexao->query($sql);
    $row = $result->fetch(PDO::FETCH_ASSOC);
    
    if(isset($row['usuario'])){
        $_SESSION['id_usuario'] = $row['tipo'];
        $_SESSION['nome_usuario'] = $row['usuario'];
        header('Location: ../index.php');
    }else{
        //Não funcionou o login
        header('Location: ../login.php');
    }
    
        

       
}

    //echo "<p>Olá, ".$nome."</p>";
    //echo "<p>Olá, ".$password."</p>"; 


   // if ($nome == 'Caue' && $password == 'abc'){
        
        //se o usuario informar corretamente dara uma mensagem de boas vindas
       // echo "<script>alert(`Bem vindo ${nome}`)</script>";
       // echo"<h1>Usuário: ". $nome . "</h1> <br>";
       //echo"<h1>Senha: ". $password . "</h1> <br>";


       // echo "<button><a href='#' onclick='history.go(-1)'> <.< Voltar</a>";

    

   // }
   // else{

        //Se o usuario informar incorretamente dara uma mensagem de não autenticação
        //echo "<script>alert('Usuario não autenticado')</script>";

    

        //echo "<p><a href='login.php' rel='prev' target='_self'></a>Voltar</p>"; 



    
//}

?>

