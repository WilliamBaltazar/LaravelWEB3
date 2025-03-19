<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProjetoLaravel</title>
</head>
<body>

    <header> 
        
    </header>

    <section>
        <h1> Dados dos contatos </h1>
    </section>

    <section>
        <form action="/contato" method="post">
            @csrf

            <div>
                <label> Nome </label>
                <input type="text" name="txNome" />
            </div>

            <div>
                <label> E-mail </label>
                <input type="text" name="txEmail" />
            </div>

            <div>
                <label> Assunto </label>
                <input type="text" name="txAssunto" />
            </div>

            <div>
                <label> Mensagem </label>
                <textarea name="txMensagem"></textarea>
            </div>

            <div>
                <input type="submit" value="Enviar" />
            </div>
        </form>
    </section>

    <section>
        @foreach($contatos as $c)
            <p> ID: {{$c->idContato}} </p>
            <p> Nome: {{$c->nomeContato}} </p>
            <p> {{$c->emailContato}} </p>
            <p> {{$c->assuntoContato}} </p>
            <p> {{$c->mensagemContato}} </p>      
        @endforeach
    </section>

    <footer>

    </footer>
    
</body>
</html>