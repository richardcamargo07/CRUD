<?php
 
 $dbHost = 'localhost';
 $dbUsername = 'root';
 $dbPassword = '';
 $dbName = 'formulario_bd';

 $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 

  //Teste de conexão
  //if($conexao->connect_errno)
  //{
  //  echo "Erro";
  //}
  //else{
  //  echo "Conexão efetuada com sucesso";
  //}


?>