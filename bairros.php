<?php 
include("action/verificar_sessao.php");
$conexao = require 'db/connect.php';
?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        include ('./componnets/js.php');
    ?>
    <title>Adicionar Bairros</title>
    <style>
        h1{
            text-align: center;
        }
        #a{
            margin: 10px 0px 0px 0px;
        }
 
 
    </style>
</head>
<body>
    <header>    
 
    <?php 
        include ('./componnets/menu.php');
    ?>
 
    </header>    
 
    <main>
        <h1>Adicionar Bairros</h1>
 
        <form action="action/action_bairros.php" method="POST" >
            
            <div class="row"> 
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nome">Nome do bairro</label>
                        <input type="text" required name="nome_bairro" class="form-control" >
                    </div>
                </div>
                <div col-md-6>
                    <div class="form-group">
                        <label for="cidade">Cidade</label>
                        <select name="id_cidade" class="form-control">
                            <option value=0>Selecione..</option>

                            <?php
                            $stmt = $conexao->prepare("select idcidades, nome from cidades");
                            $stmt->execute();
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                echo ("<option value={$row['nome_bairro']} > {$row['nome']}</option>");
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <!--
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="cidade">Cidade</label>
                        <select name="id_cidade" class="form-control">
                        <option value=0>Selecione..</option>
                        
                        <?php
                        /*
                            $stmt = $conexao->prepare("select id, nome from cidades order by nome");
                            $stmt->execute();
                            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                                echo ("<option value={$row['id']} > {$row['nome']}</option>");
                            }
                            */
                        ?>
                        
                        </select>
                    </div>
 
                </div>
                        -->

                <div>
                    
                </div>
                <div class="col-md-12 mt-3">
                    <div class="submit">
                        <input type="submit" name="submit" class="btn btn-info btn-md" value="Cadastrar"> 
                    </div>
 
                </div>
            </div>
        </form>
 
        <div id="a">
            <table class="table">
                <thead>
                    <tr>
                        
                        <th scope="col">Bairro</th>
                        <th scope="col">Cidade do Bairro</th>
                        <th scope="col">Acoes</th>
                    </tr>
                </thead>
                <tbody>

                <?php 
                         $stmt = $conexao->prepare("select id_cidade, longadouro from bairros order by nome");
                         $stmt->execute();
                         while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                             echo ("<tr>
                                
                                    <td>{$row['id_cidade']}</td>
                                    <td>{$row['longadouro']}</td>
                                 </tr>");
                         }
                    
                    ?>
                            
                    
                <!--
                <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    -->
                </tbody>
            </table>
                                            
 
        </div>
 
    </main>
    
</body>
</html>
 
