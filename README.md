# Agenda de Contatos 

Este é um projeto de gerenciamento de contatos, desenvolvido utilizando PHP e MySQL. Ele permite realizar as operações CRUD (Criar, Ler, Atualizar, Deletar) para manipulação de contatos, como adicionar, editar e excluir informações dos contatos.

## Funcionalidades

- **Visualização de Contatos**: Exibe uma lista de contatos cadastrados no banco de dados.
- **Alteração de Contatos**: Permite editar os dados de um contato específico.
- **Exclusão de Contatos**: Permite excluir um contato após confirmação.
- **Cadastro de Contatos**: Adiciona novos contatos ao banco de dados.

## Tecnologias Utilizadas

- **PHP**: Para a lógica de backend e interação com o banco de dados.
- **MySQL**: Para o armazenamento e gerenciamento dos dados dos contatos.
- **HTML/CSS**: Para a estruturação e estilização da interface.
- **JavaScript**: Para a confirmação de exclusão com um prompt antes de realizar a exclusão do contato.

## Funcionalidades Detalhadas

### Tela Principal
- A página principal exibe uma tabela com a lista de contatos cadastrados.
- A tabela contém os seguintes campos: Código, Nome, Apelido, Data de Nascimento, Telefone, Rede Social.
- Cada linha da tabela possui botões para **Alterar** e **Excluir** o contato.

### Alteração de Contato
- Ao clicar no botão **Alterar**, o usuário é redirecionado para uma página de edição onde pode modificar os dados do contato.
- O formulário é preenchido com os dados atuais, permitindo que o usuário edite as informações necessárias.

### Exclusão de Contato
- Ao clicar no botão **Excluir**, o usuário é solicitado a confirmar a exclusão do contato com um **prompt** JavaScript.
- Se o usuário confirmar, o contato será removido do banco de dados.

### Cadastro de Novo Contato
- A página de cadastro permite adicionar novos contatos com os campos: Nome, Apelido, Data de Nascimento, Telefone e Rede Social.

## Instalação

### Pré-requisitos
- Um servidor web com suporte a PHP (como Apache ou Nginx).
- O MySQL ou MariaDB para o banco de dados.
- Um editor de código como VS Code ou Sublime Text para editar os arquivos.

### Passos para Configuração

1. **Baixar os arquivos**:
   - Clone ou baixe o repositório em sua máquina local.

2. **Configurar o Banco de Dados**:
   - Crie um banco de dados MySQL chamado `agenda2B2023`.
   - Execute o seguinte comando para criar a tabela `tbl_contatos`:

   ```sql
   CREATE TABLE tbl_contatos (
       Codigo INT AUTO_INCREMENT PRIMARY KEY,
       Nome VARCHAR(255),
       Apelido VARCHAR(255),
       DataDeNascimento DATE,
       Telefone VARCHAR(20),
       RedeSocial VARCHAR(255)
   );
