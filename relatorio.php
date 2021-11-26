<?php
 
 
require 'vendor/autoload.php';
$conexao = require 'db/connect.php';
use Dompdf\Dompdf;
use Dompdf\Options;
 
$options = new Options();
    $options->set('defaultFont', 'arial');
    $options->set('enable_remote', 'true');
    
    $dompdf = new Dompdf($options);
    $html = "<h1>Meu Relatorio</h1>";
    $html .= "<table>
    <thead>
        <tr>
            <th >#</th>
            <th >Nome</th>
            <th >Cidade</th>
            
        </tr>
    </thead>
    <tbody>";
 
    $stmt = $conexao->prepare("select idcidades, nome, sigla_estado as estado from cidades order by idcidades");
                         $stmt->execute();
                         while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                             $html .= "<tr>
                                    <td>{$row['idcidades']}</td>
                                    <td>{$row['nome']}</td>
                                    <td>{$row['estado']}</td>
                                    
                              </tr>";
                                
                         }
    $html .=  " </tbody>
    </table>";
 
 
 
 
    $dompdf->load_html($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    $dompdf->stream(
        "relatorio.pdf",
        array("Attachment" => false) //para download marcar TRUE
    );
 
?>
