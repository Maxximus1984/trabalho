<?php 
include_once "config.php";

$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email');
$senha = filter_input(INPUT_POST, 'senha');

$sql = "INSERT INTO tb_admin(nome, email, senha) VALUES('$nome','$email','$senha')";

$resultado_cliente = mysqli_query($conn, $sql);

if(mysqli_insert_id($conn)){
    header("Location: cadastro_admin.html");
}else{
    header("Location: cadastro_admin.html");
}

?>