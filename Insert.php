<link rel="stylesheet" href="style.css">
<?php
    $Nome = $_POST["Nome"];
    $Apelido = $_POST["Apelido"];
    $Telefone = $_POST["Telefone"];
    $DataDeNascimento = $_POST["DataDeNascimento"];
    $RedeSocial = $_POST["RedeSocial"];
    
    # Dados para a conexão com o banco de dados
    $servidor = 'localhost';# Nome DNS ou IP do seu servidor HTTP
    $usuario = 'root'; # Nome de usuário para acesso ao MySQL
    $senha = ''; # Senha de acesso
    # $banco = 'pessoa'; # Nome do banco de dados
    // Conectar com o Banco de Dados
    $link = mysqli_connect("localhost", "root", "", "agenda2b2023");
    if (!$link) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL.".PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno().PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error().PHP_EOL;
    exit;
    }
    //query SQL
    $cadastro = "INSERT INTO tbl_contatos(";
    $cadastro = $cadastro."Nome, ";
    $cadastro = $cadastro."Apelido, ";
    $cadastro = $cadastro."DataDeNascimento, ";
    $cadastro = $cadastro."Telefone, ";
    $cadastro = $cadastro."RedeSocial) ";
    $cadastro = $cadastro."VALUES (";
    $cadastro = $cadastro."'$Nome', ";
    $cadastro = $cadastro."'$Apelido', ";
    $cadastro = $cadastro."'$DataDeNascimento', ";
    $cadastro = $cadastro."'$Telefone', ";
    $cadastro = $cadastro."'$RedeSocial') ";
    $link->query($cadastro) or die($link->error);
    // Encerra a conexão
    mysqli_close($link);
   
    echo "<script>alert('Banco de Dados atualizado com sucesso!');</script>";
    
    echo "<div class='center-link'><p><a href='TelaPrincipal.php' class='btn voltar'>Voltar para tela de Cadastro</a></p></div>";

?>
