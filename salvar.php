<?php

// conectar no banco de dados
 include("bootstrap.php");

//coletar variáveis
$nome = $_POST["nome"];

// preparar query para salvar
$sql = "INSERT INTO `nome`( `nome`) VALUES ('$nome')";
//$sql = "INSERT INTO nome`(`nome`, `id`) VALUES ('$nome','$id')";

// executa a query
if (mysqli_query($conn, $sql)) {
    echo "$nome cadastrado com sucesso!", 'success';
} else
    echo "$nome Não foi cadastrado", 'danger';




// desconecta do banco
mysqli_close($conn);

// envia mensagem de sucesso
?>
<!DOCTYPE html>
<html lang= "en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<a href="/crud/index.php">Voltar</a>

</body>
</html>
