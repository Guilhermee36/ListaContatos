<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<?php
    $Codigo= $_POST["Codigo"];
    $Nome = $_POST["Nome"];
    $Apelido = $_POST["Apelido"];
    $DataDeNascimento = $_POST["DataDeNascimento"];
    $Telefone = $_POST["Telefone"];
    $RedeSocial = $_POST["RedeSocial"];
   
    # Dados para a conexão com o banco de dados
    $servidor = 'localhost'; # Nome DNS ou IP do seu servidor HTTP
    $usuario = 'root'; # Nome de usuário para acesso ao MySQL
    $senha = ''; # Senha de acesso
    $banco = 'agenda2B2023';# Nome do banco de dados
    // Conectar com o Banco de Dados
    $link = mysqli_connect($servidor, $usuario, $senha, $banco);
        if (!$link) {
        echo "Error: Falha ao conectar-se com o banco de dados MySQL.".PHP_EOL;
        echo "<br>Debugging errno: " . mysqli_connect_errno().PHP_EOL;
        echo "<br>Debugging error: " . mysqli_connect_error().PHP_EOL;
        exit;
        }
    //query SQL
        $alterar = "UPDATE tbl_contatos SET Nome='$Nome', Apelido='$Apelido', 
        DataDeNascimento=' $DataDeNascimento', Telefone='$Telefone', RedeSocial = '$RedeSocial'  WHERE Codigo='$Codigo'";

        $link->query($alterar) or die($link->error);
    // Encerra a conexão
    mysqli_close($link);
    echo "<script>alert('Banco de Dados atualizado com sucesso!'); </script>";
    echo "<h1>Alteração de dados do Contato</h1><br>";
    echo "<h3><a href='TelaPrincipal.php'>Lista de Contatos</a></h3><br>";
    echo "<h3><a href='CadastroCont.html'>Cadastrar Contato</a></h3>";
?>

