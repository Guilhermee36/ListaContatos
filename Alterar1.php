<link rel="stylesheet" href="style.css">
<?php
    // Conectar com o Banco de Dados
    $link = mysqli_connect('localhost', 'root', '', 'agenda2B2023');
    if (!$link) {
        echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    $Codigo = $_GET["Codigo"];
    // Query SQL
    $sql = "SELECT * FROM tbl_contatos WHERE Codigo = '$Codigo'";
    $rs = mysqli_query($link, $sql);
    $dado = mysqli_fetch_assoc($rs);
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Alteração de Dados do Contato</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <!-- Cabeçalho fixo -->
        <header>
            <h1>Alteração de Dados do Contato</h1>
        </header>

        <!-- Conteúdo principal centralizado -->
        <div class="container">
                <form method="post" action="insert.php">
                    <br>
                    <p><b>Código:   <input type="text" name="Codigo" readonly="readonly" value="<?php echo $dado['Codigo']; ?>"></p>
                    <p><b>Nome:     <input type="text" name="Nome" value="<?php echo $dado['Nome']; ?>"></p>
                    <p>Apelido:     <input type="text" name="Apelido" value="<?php echo $dado['Apelido']; ?>"></p>
                    <p><b>Data de Nascimento: <input type="date" name="DataDeNascimento" value="<?php echo $dado['DataDeNascimento']; ?>"/></p>
                    <p>Telefone:    <input type="text" name="Telefone" value="<?php echo $dado['Telefone']; ?>"/></p>
                    <p>Rede Social: <input type="text" name="RedeSocial" value="<?php echo $dado['RedeSocial']; ?>"/></p>
                    
                    <div class="button">
                        <input type="submit" value="Alterar" />
                    </div>
                </form>
        </div>

        <!-- Rodapé fixo -->
        <footer>
            <p>&copy; Todos os direitos reservados.</p>
        </footer>
    </body>
</html>