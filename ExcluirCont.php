<link rel="stylesheet" href="style.css">

<?php
$Codigo = $_GET["Codigo"];

// Dados para a conexão com o banco de dados
$servidor = 'localhost'; // Nome DNS ou IP do servidor HTTP
$usuario = 'root'; // Nome de usuário para acesso ao MySQL
$senha = ''; // Senha de acesso
$banco = 'agenda2B2023'; // Nome do banco de dados

// Conectar com o Banco de Dados
$link = mysqli_connect($servidor, $usuario, $senha, $banco);
if (!$link) {
  echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
  echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
  echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
  exit;
}

// Query SQL para deletar o contato
$deleta = "DELETE FROM tbl_contatos WHERE Codigo = $Codigo";
$link->query($deleta) or die($link->error);

// Encerra a conexão
mysqli_close($link);

// Exibe a mensagem de sucesso
echo "<script>alert('Banco de Dados atualizado com sucesso!'); </script>";
?>

<div class="container">
  <header>
    <h1>Gerenciamento de Contatos</h1>
  </header>
  <div class="center-link">

    <h3><a href="TelaPrincipal.php" class="btn voltar">Lista de Contatos</a></h3>
    <h3><a href="CadastroCont.php" class="btn voltar">Cadastrar Contato</a></h3>
  </div>

  <footer>
    <p>&copy; Todos os direitos reservados.</p>
  </footer>
</div>