<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <div>
            @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
            @endif
        </div>
        <form method="post" action="{{route('dentista.cadastrar')}}">
            @csrf 
            @method('post') 

            <div>
                <label>Nome</label>
                <input type="text" name="name" placeholder="Digite seu nome" required />
            </div>
            <div>
                <label>Email</label>
                <input type="email" name="email" placeholder="Digite seu email" required />
            </div>
            <div>
                <label>CRO</label>
                <input type="number" name="cro" placeholder="Digite seu CRO" required />
            </div>
            <div>
                <label>CRO/UF</label>
                <input type="text" name="cro_uf" placeholder="Digite a UF do CRO" maxlength="2" required />
            </div>
            <div>
                <input type="submit" value="Cadastrar" />
            </div>
        </form>
    </body>
</html>