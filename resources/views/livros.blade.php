<!DOCTYPE html>
<html>
<head>
    <title>Lista de Livros</title>
    <style>

        #livros-list{
            width:45%;
        }
        .card {
        
            width:180px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin: 10px;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
           
        }

        .card:hover {
            transform: translateY(-5px);
           
        }

        .card p {
            margin: 5px 15px;
        }

        .card button {
            background-color: #3498db;
            color: #fff;
            border: none;
            margin: 5px 15px;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
        }

        .resenha {
            display: none;
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f5f5f5;
           
        }

     .form-completo{
            width: 200px; 
            margin-left:50%;
            margin-right:40%;
            margin-top:10px;
     }

        .input-form{
            width:100%;
            height:30px;
        }
    
        #resenha{
            height:70px
        }

        .botão-form {
            width:210px;
            background-color: #3498db;
            color: #fff;
            padding: 10px;
            border-radius:2px;
            border: none;;
            cursor: pointer;
        }


    </style>
</head>
<body>
    <h1>Lista de Livros</h1>
    <div id="livros-list"></div>
    
                        
    <script>
        const livrosList = document.getElementById('livros-list');

        async function renderizarLivros() {
            try {
                const response = await fetch('http://localhost:8000/api/livros');
                if (!response.ok) {
                    throw new Error('Erro ao buscar dados');
                }
                const livros = await response.json();

                if (livros.length === 0) {
                    livrosList.innerHTML = 'Nenhum livro encontrado.';
                } else {
                    livros.forEach(livro => {
                        const card = criarCardLivro(livro);
                        livrosList.appendChild(card);
                    });
                }
            } catch (error) {
                console.error(error);
                livrosList.innerHTML = 'Erro ao buscar dados.';
            }
        }

            function toggleResenha(resenha) {
        if (resenha.style.display === 'block') {
        resenha.style.display = 'none';
        } else {
        resenha.style.display = 'block';
        }
    }


        function criarCardLivro(livro) {
            const card = document.createElement('div');
            card.className = 'card';

            card.innerHTML = `
        <p><strong>Título:</strong> ${livro.titulo}</p>
        <p><strong>Autor:</strong> ${livro.autor}</p>
        <p><strong>Classificação:</strong> ${livro.classificacao}</p>
        <button onclick="toggleResenha(this.nextElementSibling)">Mais Informações</button>
        <div class="resenha" style="display: none;">
            <p><strong>Resenha:</strong> ${livro.resenha}</p>
        </div>
    `;

    return card;
}
        window.onload = renderizarLivros;
    </script>


                           
<div class="form-completo"> 
<form class="formulario" id="adicionar-livro-form">
        <h2>Adicionar Livro</h2>
    <label for="titulo">Título:</label>
    <input class="input-form" type="text" id="titulo" name="titulo" required>

    <label for="autor">Autor:</label>
    <input class="input-form" type="text" id="autor" name="autor" required>

    <label for="classificacao">Classificação:</label>
    <input class="input-form" type="number" id="classificacao" name="classificacao" required>

    <label for="resenha">Resenha:</label>
    <textarea class="input-form" id="resenha" name="resenha" rows="4" required></textarea>

    <button class="botão-form" type="submit">Adicionar Livro</button>
</form>
</div> 
</body>
</html>

