<?php
if(isset($_POST['submit'])){

    /*
    print_r('Nome: ' . $_POST['nome']);
    print_r('E-mail: ' . $_POST['email']);
    print_r('Senha: ' . $_POST['senha']);
    print_r('Senha recuperação: ' . $_POST['senharep']);
    print_r('telefone: ' . $_POST['telefone']);
    */

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senharep = $_POST['senharep'];
    $telefone = $_POST['telefone'];

    if($senharep != $senha){
        echo "Senha incorreta";
        header('Location: cadastro.php');
    }else{
        $result= mysqli_query($conexao,"INSERT INTO tbcadastro(nome, email, senha, repetirSenha, telefone) VALUES ('$nome', '$email', '$senha', '$senharep', '$telefone')");
        header('Location: login.php');
    }
    
    
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="./CSS/cadastro.css"/>  
    
    <link rel="shortcut icon" type="imagex/png" href="./img/escudo.png">
</head>
<body>
    

    <main class="cadastro">

        <div class="container-cadastro">
            <!-- Imagem com tamanho e comprimento estilizados abaixo -->
         <img src="./img/escudo.png" width="300px" height="300px" alt="Escudo do Náutico de Capibaribe">

           <form class="dados" action="cadastro.php" method="POST">

            <input type="text" name="nome" placeholder="Nome">
            <input  type="text" name="email" placeholder="E-mail">
            <input  type="password" name="senha" placeholder="Insira sua senha">
            <input type="password" name="senharep" placeholder="Repita sua senha">
            <input type="text" name="telefone" placeholder="Insira seu telefone">

            <input type="submit" name="submit" class="enviar-cadastro"></input>  
            
           </form>
        </div>

    </main>
    
</body>
</html>