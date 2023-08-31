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
        <form method="post" action="{{route('especialidade.editar', ['especialidade' => $especialidade])}}">
            @csrf 
            @method('put')

            <div>
                <label>Nome</label>
                <input type="text" name="nome" value="{{$especialidade->nome}}" required />
            </div>
           
            <div>
                <input type="submit" value="Editar" />
            </div>
        </form>
    </body>
</html>