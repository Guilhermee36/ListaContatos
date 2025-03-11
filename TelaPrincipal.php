<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>P W 2 - PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <h1>Lista de contatos</h1>
    </header>
    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Apelido</th>
                <th>Data de Nascimento</th>
                <th>Telefone</th>
                <th>Rede Social</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $servidor = 'localhost';
            $usuario = 'root';
            $senha = '';
            $banco = 'agenda2B2023';
            
            $link = mysqli_connect($servidor, $usuario, $senha, $banco);
            if (!$link) {
                echo "Erro ao conectar-se com o banco de dados MySQL.";
                exit;
            }
            
            $sql = "SELECT * FROM tbl_contatos";
            $rs = mysqli_query($link, $sql);
            
            while ($dado = mysqli_fetch_assoc($rs)) {
                $professorID = $dado['Codigo'];
                $alteracaoURL = "Alterar1.php?Codigo=$professorID";
                $exclusaoURL = "ExcluirCont.php?Codigo=$professorID";
            
                echo "<tr>";
                echo "<td>" . $dado['Codigo'] . "</td>";
                echo "<td>" . $dado['Nome'] . "</td>";
                echo "<td>" . $dado['Apelido'] . "</td>";
                echo "<td>" . $dado['DataDeNascimento'] . "</td>";
                echo "<td>" . $dado['Telefone'] . "</td>";
                echo "<td>" . $dado['RedeSocial'] . "</td>";
                echo "<td><a href='$alteracaoURL' class='btn'>Alterar</a></td>";
                echo "<td><a href='#' class='btn' onclick='confirmarExclusao($professorID)'>Excluir</a></td>";
                echo "</tr>";
            }
            
            mysqli_close($link);
            ?>
        </tbody>
    </table>
    <a href='CadastroCont.php' class='voltar'>Cadastrar Contato</a>
    
    <script>
        function confirmarExclusao(Codigo) {
            var resposta = confirm("Realmente deseja excluir este contato?");
            if (resposta) {
                window.location = "ExcludeConfirm.php?Codigo=" + Codigo;
            }
        }
    </script>
    <footer> <p>&copy; Todos os direitos reservados.</p></footer>
</body>
</html>