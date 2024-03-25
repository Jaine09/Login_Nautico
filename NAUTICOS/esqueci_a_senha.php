<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar senha</title>
    <link rel="stylesheet" href="./CSS/esqueci_a_senha.css"/>

    <!--  Ícone para ficar na aba do site -->
    <link rel="shortcut icon" type="imagex/png" href="./img/escudo.png">
</head>
<body>
    <main class="recuperar-senha">
        <!-- Tela principal onde o usuário vai preencer com os dados  pedido  -->
        <div class="container-esqueci-a-senha">
            <h2> Recuperação de senha</h2>
            <h4>Para recuperar sua senha, insira o e-mail cadastrado. </h4>
            <!-- Formulário de preenchimento -->
            <form action="recuperacaoSenha.php" method="POST "class="recuperar-a-senha">
                <input type="text" name="email" placeholder="E-mail">
                <button type="submit" name="submit" class="enviar-esqueci-a-senha">Enviar</button> 
            </form>
        </div>
    </main>
    
</body>
</html>