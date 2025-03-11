<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body></body>

</html>
<?php
if (isset($_GET['Codigo'])) {
  $Codigo = $_GET['Codigo'];
?>
<?php
} else {
  echo "<p>Código do Contato não fornecido.</p>";
}
?>

<div class="container">
  <header>
    <h1>Gerenciamento de Contatos</h1>
  </header>
  <div class="center-link">

    <a class="btn" href='ExcluirCont.php?Codigo=<?php echo $Codigo; ?>'>Confirmar Exclusão</a>
    <a class="btn" href='TelaPrincipal.php'>Cancelar</a>
  </div>

  <footer>
    <p>&copy; Todos os direitos reservados.</p>
  </footer>
</div>