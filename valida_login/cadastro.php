<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylelogin.css">
    <title>Login</title>
</head>
<body>
    <div class="none">
        <div class="img-center">
            <img src="login.png" alt="">
        </div>
        <form action="cadastrar.php" method="post">
            <h2 style="text-align: center; padding-top: 1.3rem; color: white; font-size: 2rem;">Entrar</h2>
            <div>

                <label for="" style="color: white; font-size: 1.5rem; text-align: center;">Usuário:</label> <br>
                <input type="text" placeholder="Usuario" name="email">

            </div>

            <div>
                
                <label for="" style="color: white; font-size: 1.5rem; text-align: center;">Senha:</label> <br>
                <input type="password" placeholder="Senha" name="senha">

            </div>

            <div class="button">
                <input type="submit" value="Entrar">
            </div>

            <div style="margin-top: 1rem;"><p style="color: white;">Ainda não tem uma conta? <a href="#" style="color: white;" onclick="cadastrar()">Cadastre-se</a></p></div>
        </form>
    </div>

    <!-- FORMULARIO CADASTRO  -->

    <div class="center">
        <div class="img-center">
            <img src="login.png" alt="">
        </div>
        <form action="cadastrar.php" method="post">
            <h2 style="text-align: center; padding-top: 1.3rem; color: white; font-size: 2rem;">Cadastre-se</h2>
            <?php

                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                if(isset($_SESSION['error'])){
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                }

            ?>
            <div>

                <label for="" style="color: white; font-size: 1.5rem; text-align: center;">Usuário:</label> <br>
                <input type="text" placeholder="Usuario" name="user">

            </div>

            <div>

                <label for="" style="color: white; font-size: 1.5rem; text-align: center;">Email:</label> <br>
                <input type="email" placeholder="Email" name="mail">

            </div>

            <div>
                
                <label for="" style="color: white; font-size: 1.5rem; text-align: center;">Senha:</label> <br>
                <input type="password" placeholder="Senha" name="password">

            </div>

            <div class="button">
                <input type="submit" value="Cadastrar">
            </div>

            <div style="margin-top: 1rem;"><p style="color: white;">Tem uma conta? <a href="#" style="color: white;" onclick="cadastrar()">Entrar</a></p></div>
        </form>
    </div>

<script src="scriptlogin.js"></script>
</body>
</html>