<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "fullstackeletro";
    
    //criando a conexão
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    //verificando a conexão
    if(!$conn){
        die("A conexão ao BD falhou: " . mysqli_connect_error());
        }

    
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $produto = $_POST['produto'];
    $valor = $_POST['valor'];
    $qtd = $_POST['qtde'];

    if (isset($_POST['nome']) && isset($_POST['endereco']) && isset($_POST['telefone']) && isset($_POST['produto']) && isset($_POST['valor']) && isset($_POST['qtd'])) {
    echo "Dados recebidos! ";
    }
?>    


<!DOCTYPE html>
<html lang="pt-BR">

    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Carrinho</title>
    </head>

    <body>
    <div class="container-flex">

        <?php
        include('menu.html');
        ?>
        
        <center>
            <h2>Minha Escolha</h2>
            <form method="post" name="compra" action="">
                Nome do cliente: <br>
                <input type="text" name="nome"><br>
                Endereço: <br>
                <input type="text" name="endereco"><br>
                Telefone: <br>
                <input type="text" name="telefone"><br>
                Produto: <br>
                <input type="text" name="produto"><br>
                Valor unitário: <br>
                <input type="text" name="valor"><br>
                Quantidade: <br>
                <input type="number" name="qtd"><br>
                <br>
                <input type="submit" name="submit" value="Adicionar venda">
            </form>
        </center><br>
    </div>

    <?php
        $sql = "INSERT INTO pedidos (nome_cliente, endereço, telefone, produto, valor_uni, qtd) VALUES ('$nome', '$endereco', '$telefone', '$produto', '$valor', '$qtde')";

        $result = $conn->query($sql);

            if ($result) {
            echo "Dados inseridos com sucesso ";
            } else {
        echo "Dados não inseridos na tabela!! ";
        }
    ?>

    <footer id="rodape">
        <p id="forma_pagamento">Formas de pagamento<p>            
        <img class="pagamento" src="./imagem/cartao.jpeg" alt="Formas de pagamento">
        <p>&copy; Recode Pro</p>
    </footer>
        
    </body>
</html>