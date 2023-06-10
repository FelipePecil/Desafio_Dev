<?php

$hostname = "mysql.pecil.kinghost.net";
$user = "pecil";
$pass = "E2m2t9a9";
$base = "pecil";


$con = mysqli_connect($hostname, $user, $pass, $base);

if(mysqli_connect_errno()){
    printf("Conexão Falhou %s\n", mysqli_connect_errno());
    exit();
}
include('validacao.php');

?>
