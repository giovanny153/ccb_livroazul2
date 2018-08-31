<?php include_once 'conexao.php';
session_start();


$tb = 'fin_mov';
// $cat     = filter_input(INPUT_POST, 'categoria');
$cat = 'conta'; 
$titulo = 'Gráfico de torta colorido!';
// $_SESSION['cat1'] =filter_input(INPUT_POST, 'categoria');
echo $cat;

//Select no banco
 $query = "SELECT $cat, count(*) as number FROM $tb GROUP BY $cat";  
 $result = mysqli_query($link, $query);  
 

$_SESSION['cat'] = filter_input(INPUT_POST, 'categoria');
$_SESSION['result'] = $result;
echo $result;
echo $query;
 