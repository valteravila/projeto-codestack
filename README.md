# API de Gerenciamento de Livros

Esta é uma API de gerenciamento de livros desenvolvida em Laravel. Ela fornece endpoints para adicionar, listar, atualizar e excluir livros da biblioteca.

## Funcionalidades

- Adição de um novo livro
- Listagem de todos os livros
- Recuperação de detalhes de um livro específico
- Atualização de detalhes de um livro específico
- Exclusão de um livro específico

## Endpoints
POST /livros: Adiciona um novo livro.

GET /livros: Recupera a lista de todos os livros.

GET /livros/{id}: Recupera detalhes de um livro específico.

PUT /livros/{id}: Atualiza detalhes de um livro específico.

DELETE /livros/{id}: Deleta um livro específico.

## Estrutura 

    {
        "titulo": "teste",
        "autor": "autor-teste",
        "classificacao": 5,
        "resenha": "resenha-teste",
        "data_adicao": "2023-10-27",
        "created_at": null,
        "updated_at": null
    }

