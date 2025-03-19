<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProjetoLaravel</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<header> 

    </header>

    <section>
        <h1 class="titulo"> Cadastro de Produtos </h1>
    </section>

    <section>
        <div class="divform">
        <form action="/produto" method="post">
            @csrf

            <div class="campo">
                <label><Strong>Nome</Strong></label>
                <input type="text" name="txNome" />
            </div>

            <div class="campo">
                <label><Strong>Tamanho </Strong></label>
                <input type="text" name="txTamanho" />
            </div>

            <div class="campo">
                <label><Strong> Gênero </Strong></label>
                <input type="text" name="txGenero" />
            </div>

            <div class="campo">
                <label><Strong> Quantidade </Strong></label>
                <input type="text" name="txQuantidade" />
            </div>

            <div class="campo">
                <label><Strong> Valor</Strong></label>
                <input type="text" name="txValor" />
            </div>

            <div class="campo">
                <label><Strong> Cor</Strong></label>
                <input type="text" name="txCor" />
            </div>

            <div>
                <input class="botao" type="submit" value="Salvar" />
            </div>
        </form>
        </div>  
    </section>
    <br />
    <h2 class="subtitulo"> Produtos Cadastrados</h1>
    <section>
        <table>   
                <tr>
                    <th>Nome</th>
                    <th>Tamanho</th>
                    <th>Genêro</th>
                    <th>Quantidade</th>
                    <th>Valor</th>
                    <th>Cor</th>
                </tr>
                @foreach($produtos as $p)
                <tr>
                    <td>{{$p->nomeProduto}}</td>
                    <td>{{$p->tamanhoProduto}}</td>
                    <td>{{$p->generoProduto}}</td>
                    <td>{{$p->quantProduto}}</td>
                    <td>{{$p->valorProduto}}</td>
                    <td>{{$p->corProduto}}</td>
                </tr>
                @endforeach
            </table>
    </section>
    <footer>

    </footer>
</body>
</html>