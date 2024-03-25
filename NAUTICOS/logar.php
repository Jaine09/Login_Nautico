<?php
session_start();

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){

    include_once('config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //Testando login
    //print_r( 'e-mail: ' .$email);
    //print_r('senha: ' .$senha);

    $sql = "SELECT * FROM tbcadastro WHERE email = '$email' and senha = '$senha'";

    $result= $conexao -> query($sql); // consultando o banco de dados

    //Testando consulta no banco
    /*print_r($sql);
    print_r($result); */

    if(mysqli_num_rows($result) < 1){//verificando o número de linhas no banco
        
        unset($_SESSION['email']); //destruindo a sessão
        unset($_SESSION['senha']);

        header('Location: cadastro.php');
    }else{

        $_SESSION['email'] = $email; //inicia uma sessão com o email cadastrado
        $_SESSION['senha'] = $senha;

        header('Location: home.php');
    }
}else{

    header('Location: cadastro.php');
}

?>