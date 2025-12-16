# 🪟 Vidraçaria

## 🎯 Visão Geral do Projeto

Este projeto é um sistema web completo, desenvolvido para **Visualizar e Gerenciar Tabelas de Produtos** de uma vidraçaria, oferecendo um CRUD (Create, Read, Update, Delete) robusto para administração eficiente do catálogo.

O foco é fornecer uma interface de gerenciamento simples e direta, ideal para a gestão interna de itens e preços.

## ✨ Tecnologias Utilizadas

O projeto foi construído utilizando as seguintes tecnologias e arquitetura:

* **Framework:** Laravel (PHP)
* **Padrão de Arquitetura:** MVC (Model-View-Controller) Clássico
* **Banco de Dados:** SQLite
* **Frontend:** Blade (renderização server-side, sem o uso de frameworks JavaScript)
* **Testes:** Pest (Incluído no Starter Kit)

## 🚀 Instalação e Configuração

Siga os passos abaixo para clonar o repositório e colocar o projeto para rodar em sua máquina local.

### Pré-requisitos

Certifique-se de ter o seguinte software instalado:

* PHP (versão compatível com Laravel)
* Composer
* Node.js e npm

### Passos de Instalação

1.  **Clone o Repositório:**
    ```bash
    git clone [https://docs.github.com/pt/migrations/importing-source-code/using-the-command-line-to-import-source-code/adding-locally-hosted-code-to-github](https://docs.github.com/pt/migrations/importing-source-code/using-the-command-line-to-import-source-code/adding-locally-hosted-code-to-github)
    cd vidracaria
    ```

2.  **Instale as Dependências PHP:**
    ```bash
    composer install
    ```

3.  **Configuração do Ambiente:**
    * Crie uma cópia do arquivo de ambiente:
        ```bash
        cp .env.example .env
        ```
    * Gere a chave da aplicação:
        ```bash
        php artisan key:generate
        ```

4.  **Instale as Dependências Frontend e Compile os Assets:**
    ```bash
    npm install
    npm run dev
    ```

5.  **Configure e Execute as Migrations:**
    O banco de dados SQLite será criado e as tabelas serão estruturadas.

    ```bash
    php artisan migrate
    ```

6.  **Inicie o Servidor:**
    ```bash
    php artisan serve
    ```

O projeto estará acessível em `http://127.0.0.1:8000`.

## 📂 Estrutura de Diretórios (Arquitetura MVC)

O projeto segue estritamente o padrão MVC do Laravel. Os principais arquivos e pastas para o CRUD de produtos são:

| Componente | Caminho no Projeto | Função |
| :--- | :--- | :--- |
| **Controlador** | `app/Http/Controllers/ProductController.php` | Gerencia todas as requisições (Criação, Leitura, Edição, Deleção) do produto. |
| **Modelo** | `app/Models/Product.php` | Representa a tabela de produtos no banco de dados e contém a lógica de negócio. |
| **Banco de Dados** | `database/database.sqlite` | Arquivo do banco de dados persistente. |
| **Listagem (Visualizar)** | `resources/views/products/index.blade.php` | Exibe a lista completa de produtos (tela inicial do gerenciamento). |
| **Detalhes** | `resources/views/products/show.blade.php` | Exibe as informações detalhadas de um único produto. |
| **Edição** | `resources/views/products/edit.blade.php` | Contém o formulário para atualizar os dados do produto. |
| **Estilos** | `resources/css/app.css` | Arquivo de estilos SASS/CSS. A versão final compilada vai para `public/css/app.css`. |
| **Rotas** | `routes/web.php` | Mapeia as URLs para as ações do `ProductController`. |

## 💡 Como Usar

**(Adicione aqui instruções detalhadas de como usar a interface, como credenciais de login ou as rotas principais, por exemplo: `http://127.0.0.1:8000/produtos`)**

Após iniciar o servidor (`php artisan serve`):

1.  Acesse o projeto pelo seu navegador.
2.  Utilize a interface para interagir com o CRUD:
    * **Criar (Create):** Adicione novos itens à tabela.
    * **Visualizar (Read):** Acesse a listagem e os detalhes de cada produto.
    * **Atualizar (Update):** Modifique os dados de um item existente.
    * **Deletar (Delete):** Remova itens da tabela.

## 🧪 Rodando os Testes

O projeto utiliza o **Pest** para testes unitários e de integração. Para executar o conjunto de testes, utilize o seguinte comando:

```bash
php artisan test