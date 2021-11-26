<?php
 
define('DATE_BR', 'd/m/Y');
 
$data = "1989-07-14";
$date_br = "14/07/1989";
 
$dateNow = new DateTime();
$dateBirth = new DateTime("1989-07-14");
$dateStatic = DateTime::createFromFormat(DATE_BR, $date_br);
 
echo "hoje: ". $dateNow->format(DATE_BR);
 
echo "<br>";
echo "Data nascimento: ". $dateBirth->format("m-y");
echo "<br>";
echo "data BR: ". $dateStatic->format("y-m-d");
echo "<br>";
echo "Mes atual: ". $dateBirth->format("m");
echo "<br> Metodos da classe DateTime:<br>";
var_dump(get_class_methods($dateNow));

 
echo "<p>A data de hoje é {$dateNow->format("d")} de {$dateNow->format("m")} do ano de {$dateNow->format("y")}</p>";
echo "<br>";
$newTimeZone = new DateTimeZone("America/Sao_Paulo");
//echo $newDateNow;
 
 
 
 
?>
