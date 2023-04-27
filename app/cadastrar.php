<?php 
include 'conexao.php';
$data = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$create = "INSERT INTO clientes (cli_nome, cli_nasc, cli_prof)(',' )VALUES (':')";



header('LOCATION: ../index.php');


echo " 
<script>alert('cliente cadastrado!');
window.location.href = '../cadastrados.php';
 </script>";


?>