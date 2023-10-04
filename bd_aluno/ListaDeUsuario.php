<?php

include("conexao.php");
$sql = "select * from usuario"; //consulta
$query  = $pdo -> predare ($sql); //prepara
$query -> execute(); //executa

//o comando fetch busca a próxima linha de registro
//o comando assoc cria um array indice nome do campo
//fetch_num ele converte em números ao invés de nome
$campos = $query -> fetch (pdo :: fetch_assoc);  


?>