<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Contato</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Cadastro de Contato</h1>
    </header>
    <main>
        <form method="post" action="http://localhost/Agenda3bim/Insert.php">
            <table>
                <tr>
                    <td><label for="Nome">Nome:</label></td>
                    <td><input class="inputcad"  type="text" name="Nome" id="Nome" required></td>
                </tr>
                <tr>
                    <td><label for="Apelido">Apelido:</label></td>
                    <td><input class="inputcad"  type="text" name="Apelido" id="Apelido" required></td>
                </tr>
                <tr>
                    <td><label for="DataDeNascimento">Data de Nascimento:</label></td>
                    <td><input class="inputcad"  type="date" name="DataDeNascimento" id="DataDeNascimento" required></td>
                </tr>
                <tr>
                    <td><label for="Telefone">Telefone:</label></td>
                    <td><input class="inputcad"  type="text" name="Telefone" id="Telefone" required></td>
                </tr>
                <tr>
                    <td><label for="RedeSocial">Rede Social:</label></td>
                    <td><input class="inputcad" type="text" name="RedeSocial" id="RedeSocial" required></td>
                </tr>
            </table>
            <div class="button">
                <input type="submit" value="Cadastrar" class="btn">
            </div>
        </form>
    </main>
    <footer>
        <p>Todos os direitos reservados.</p>
    </footer>
</body>
</html>