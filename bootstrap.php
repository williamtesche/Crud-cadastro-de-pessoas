<?php

// forçar exibição de erros PHP
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

// conecta no banco
$host =  "localhost";
$user = "root"; 
$pass = "";
$base = "willian";

//$conn = mysqli_connect($host,$user,$pass,$base);
if($conn = new mysqli($host,$user,$pass,$base)){
   // echo "Conectado!";
}else{
    echo "Erro!";
}
 if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
 }
//  echo "Connected successfully";

?>


