<?php
session_start();
include('conexao.php');

$user = $mysqli->real_escape_string($_POST['user']);
$email = $mysqli->real_escape_string($_POST['mail']);
$senha = $mysqli->real_escape_string($_POST['password']);
$hash = password_hash($senha, PASSWORD_DEFAULT);


$resultado = $mysqli->query("SELECT * FROM usuarios WHERE usuario='$user' OR email='$email'");
if(mysqli_num_rows($resultado) > 0){
    header('Location: cadastro.php');
    $_SESSION['msg'] = '<h3 style="color: #fd7e14;"> Usuario ou email já existentes </h3>';
exit();
} else {
 $resultado = "INSERT INTO usuarios (usuario, email, senha) VALUES ('$user', '$email', '$hash')";
 
 $resultado_sucesso = mysqli_query($mysqli ,$resultado);

if(mysqli_insert_id($mysqli)){
    header('Location: cadastro.php');
    $_SESSION['msg'] = '<h3 style="color: #20c997;"> conta criada com sucesso </h3>';
}else{
    echo 'nao foi possivel cadastrar usuario';
}

}


?>