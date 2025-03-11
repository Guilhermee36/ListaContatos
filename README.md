#listas de contatos

Este código refere-se a uma aplicação PHP simples para gerenciar uma lista de contatos. Ele possui funcionalidades de listagem, alteração e exclusão de contatos, interagindo com um banco de dados MySQL para armazenar e manipular as informações. A seguir, detalho os principais componentes do código:

Estrutura do Código
Conexão com o Banco de Dados:

O código utiliza o MySQL para armazenar dados dos contatos, com parâmetros de conexão definidos diretamente no código (servidor, usuário, senha e banco de dados).
A conexão com o banco de dados é estabelecida em todas as páginas e encerrada após a execução das operações SQL, o que garante a integridade das transações.
Exibição dos Contatos:

Em TelaPrincipal.php, a aplicação executa uma consulta SQL para obter todos os registros da tabela tbl_contatos e exibi-los em uma tabela HTML.
Cada linha da tabela representa um contato, com os campos: código, nome, apelido, data de nascimento, telefone e rede social.
Além disso, para cada contato, são exibidos botões para alteração e exclusão.
Alteração de Dados:

O usuário pode alterar os dados de um contato clicando no botão de Alterar, que direciona para Alterar1.php. Neste arquivo, é apresentado um formulário preenchido com os dados atuais do contato, permitindo a edição.
O formulário de alteração inclui campos para Nome, Apelido, Data de Nascimento, Telefone e Rede Social, sendo que o campo Código é somente leitura.
Exclusão de Contatos:

A exclusão de um contato é realizada por meio de uma confirmação, onde o usuário clica em Excluir na lista de contatos, o que aciona a função confirmarExclusao(). Essa função exibe um prompt de confirmação e, caso a resposta seja afirmativa, a página é redirecionada para ExcludeConfirm.php, que realiza a exclusão do contato do banco de dados.
O botão de Excluir usa um onclick para chamar a função JavaScript confirmarExclusao(), que solicita ao usuário uma confirmação antes de realizar a exclusão.
Estilo e Layout:

O estilo da página é ajustado com um arquivo CSS (style.css), que garante uma aparência moderna e limpa.
O layout é responsivo, com a centralização do conteúdo na tela, incluindo uma tabela de contatos organizada e bem formatada. As cores e botões seguem uma paleta definida com cores que favorecem uma boa leitura e navegabilidade.
A página utiliza flexbox para centralizar os elementos, tornando o design adaptável e bem posicionado em diversas resoluções de tela.
Rodapé e Cabeçalho:

O cabeçalho da página (<header>) é fixo no topo e contém o título "Lista de Contatos", enquanto o rodapé (<footer>) é fixo na parte inferior da página, proporcionando informações sobre a autoria do projeto.
Ambos os elementos são estilizados de forma consistente, com o cabeçalho sendo destacado em uma cor de fundo sólida, que contrasta com o conteúdo principal.
Funcionalidades
Visualização: O usuário pode visualizar todos os contatos cadastrados no banco de dados em uma tabela bem estruturada.
Alteração: O usuário pode editar os dados de um contato específico clicando em um link que o direciona para uma página de edição.
Exclusão: O usuário pode excluir um contato após uma confirmação explícita, para evitar exclusões acidentais.
Cadastro: Há também um link para adicionar novos contatos, permitindo o cadastro diretamente pela página de CadastroCont.php.
Fluxo de Navegação
Tela Principal: Exibe a lista de contatos e oferece as opções de Alterar ou Excluir.
Alteração de Contato: Ao clicar em Alterar, o usuário é redirecionado para uma página de edição onde pode modificar os dados de um contato específico.
Confirmação de Exclusão: O usuário pode confirmar ou cancelar a exclusão de um contato com um prompt de confirmação antes que a exclusão aconteça no banco de dados.
Cadastro de Novo Contato: O usuário pode acessar a página de cadastro para inserir novos contatos à lista.
