<?php


$dados=$_POST['conteudo'];
$autor=$_POST['autor'];


include_once('conexion.php');


    $stmt = $pdo->prepare('INSERT INTO blog (noticia, autor) VALUES(:noticia,:autor)');
    $stmt->execute(array(
      ':noticia' => $dados,
      ':autor'=>$autor
    ));
  
  

     header('location:../login/logon.php?&sucesso');

 

   ?>