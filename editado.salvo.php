<?php

//Mensagem
$mensagem = "Usuário invalido";

// conectando com o banco
include("bootstrap.php");

// include_once "editar.php";
$nome = $_POST['nome']; 
$id = $_GET['id'];

if($nome == "" || $id == ""){

    echo"<div class='alert alert-success'>$mensagem</div>";
    
}else{
    //editar pessoa do banco de dados 
    $sql = "UPDATE `nome` SET `nome` = '$nome' where id = $id";

    // executar o comando
    mysqli_query($conn,$sql);

    // desconecta do banco
    mysqli_close($conn);


 
    // mensagem de sucesso!
    echo "pessoa atualizada com sucesso!";
}


?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="stylo.css">
     <title>Document</title>
</head>
 <body>
 <a class="btn btn-success" href="/crud/index.php">Voltar</a>
 </body>
 </html>