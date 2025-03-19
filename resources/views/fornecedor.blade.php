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
        <h1 class="titulo">Cadastro de Fornecedor</h1>
    </section>
        <br />
    <section>
        <div class="divform">
        <form action="/fornecedor" method="post">
            @csrf
            <div class="campo">
                <label><strong>Nome do Fornecedor</strong></label>
                <input type="text" placeholder="Nome" name="txNome" required/>
            </div>

            <div class="campo">
                <label><strong>Endereço</strong></label>
                <input type="text" placeholder="Rua:Marcial, 25 Mooca, São Paulo-SP" name="txEndereco" />
            </div>

            <div class="campo">
                <label><strong>CNPJ</strong></label>
                <input type="text" placeholder="12.345.678/0001-99" name="txCnpj" required/>
            </div>

            <div class="campo">
                <label><strong>Telefone</strong></label>
                <input type="text" placeholder="(xx) 99999-9999" name="txTelefone" />
            </div>

            <div class="campo">
                <label><strong>Email</strong></label>
                <input type="text" placeholder="EmailTeste@Teste.com" name="txEmail" required/>
            </div>
        
            <div>
                <input class="botao" type="submit" value="Concluido" />
            </div>
        </form>
        </div>
    </section>
    <section>
            <h2 class="subtitulo">Dados Dos Fornecedores</h2>
            <br />
        <table>   
            <tr>
                <th>Nome</th>
                <th>Endereço</th>
                <th>CNPJ</th>
                <th>Telefone</th>
                <th>Email</th>
            </tr>
            @foreach($fornecedores as $f)
            <tr>
                <td>{{$f->nomeFornecedor}}</td>
                <td>{{$f->endFornecedor}}</td>
                <td>{{$f->cnpjFornecedor}}</td>
                <td>{{$f->telFornecedor}}</td>
                <td>{{$f->emailFornecedor}}</td>
            </tr>
            @endforeach
        </table>
    </section>

    <footer>

    </footer>
</body>
</html>